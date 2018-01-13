<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\LegalServiceRequest;
use App\Http\Requests\LegalProblemRequest;
use App\Http\Requests\SummaryOfFactsRequest;
use App\Http\Requests\ObjectiveAndQuestionRequest;
use App\Modules\User\Models\User;
use Auth;
use App\Repositories\PaymentRepository as Payment;
use App\Repositories\LegalCaseDetailRepository as LegalCaseDetail;
use App\Repositories\LegalCaseRepository as LegalCase;
use App\LegalCaseType;

class LegalServicesController extends Controller
{

    public function __construct(
      LegalCase $legalCase,
      LegalCaseDetail $legalCaseDetail,
      Payment $payment,
      LegalCaseType $legalCasesType)
    {
      $this->legalCase = $legalCase;
      $this->legalCaseDetail = $legalCaseDetail;
      $this->payment = $payment;
      $this->legalCasesType = $legalCasesType;
    }

    public function index()
    {
      return view('legal-services.index');
    }

    public function initialLegalAssessment()
    {
      return view('legal-services.initial-legal-assessment.index');
    }

     public function legalCases()
    {
      $legalCases = $this->legalCase->getAllByAttributes(['user_id' => Auth::user()->id],'created_at', 'desc');
      return view('legal-services.legal-cases.index', ['legalCases' => $legalCases]);
    }

    public function onlineLegalConsultation()
    {
      return view('legal-services.legal-cases.online-legal-consultation');
    }

    public function newLegalCase(LegalServiceRequest $request)
    {
      if ($legalCase = $this->legalCase->store(['user_id' => Auth::user()->id])) {
        $legalCaseDetails = [
          'legal_case_id' => $legalCase->id,
          'legal_service' => $request['legal-case-type'],
        ];
        $legalCaseDetail = $this->legalCaseDetail->store($legalCaseDetails);
        $payment = [
          'user_id' => Auth::user()->id,
          'case_id' => $legalCase->id,
          'case_detail_id' => $legalCaseDetail->id,
        ];
        $this->payment->store($payment);
        return json_encode(array('result'=>'success', 'message'=>'Updated Successfuly!', 'redirect' => route('legal-services.legal-cases.leter-of-intent', $legalCase->id)));
      }
    }

    public function letterOfIntent($id)
    {
      $legalCase = $this->legalCase->getByAttributes(['id' => $id]);
      $legalCaseDetails = $legalCase->legalCaseDetail;      
      return view('legal-services.legal-cases.letter-of-intent', [
        'legalCaseDetails' => $legalCaseDetails,
      ]);
    }

    public function legalProblem($id)
    {
      $legalCase = $this->legalCase->getByAttributes(['id' => $id]);
      $legalCaseDetails = $legalCase->legalCaseDetail;      
      return view('legal-services.legal-cases.legal-problem', [
        'legalCaseDetails' => $legalCaseDetails,
      ]);
    }

    public function legalProblemPost(LegalProblemRequest $request, $id)
    {
      if ($this->legalCase->update($id, $request->all())) {
        return json_encode(array('result'=>'success', 'message'=>'Updated Successfuly!'));
      }
      return json_encode(array('result'=>'error', 'message'=>'Update Failed!'));
    }

    public function summaryOfFacts($id)
    {
      $legalCase = $this->legalCase->getByAttributes(['id' => $id]);
      $legalCaseDetails = $legalCase->legalCaseDetail;      
      return view('legal-services.legal-cases.summary-of-facts', [
        'legalCaseDetails' => $legalCaseDetails
      ]);
    }

    public function summaryOfFactsPost(SummaryOfFactsRequest $request, $id)
    {
      if ($this->legalCaseDetail->update($id, $request->all())) {
        return json_encode(array('result'=>'success', 'message'=>'Updated Successfuly!'));
      }
      return json_encode(array('result'=>'error', 'message'=>'Update Failed!'));
    }

    public function objectivesAndQuestions($id)
    {
      $legalCase = $this->legalCase->getByAttributes(['id' => $id]);
      $legalCaseDetails = $legalCase->legalCaseDetail;      
      return view('legal-services.legal-cases.objectives-and-questions', [
        'legalCaseDetails' => $legalCaseDetails
      ]);
    }
    
    public function objectivesAndQuestionsPost(ObjectiveAndQuestionRequest $request, $id)
    {
      if ($this->legalCaseDetail->update($id, $request->all())) {
        return json_encode(array('result'=>'success', 'message'=>'Updated Successfuly!'));
      }
      return json_encode(array('result'=>'error', 'message'=>'Update Failed!'));
    }

    public function summaryOfInformation($id)
    {
      $legalCase = $this->legalCase->getByAttributes(['id' => $id]);
      $legalCaseDetails = $legalCase->legalCaseDetail;      
      return view('legal-services.legal-cases.summary-of-information', [
        'legalCaseDetails' => $legalCaseDetails
      ]);
    }

    public function perQuery($id){
      $legalCase = $this->legalCase->getByAttributes(['id' => $id]);
      $legalCaseDetails = $legalCase->legalCaseDetail;      
      return view('legal-services.legal-cases.per-query', [
        'legalCaseDetails' => $legalCaseDetails,
        'legalProblemType' => $this->legalCasesType->all(),
      ]);
    }


}
