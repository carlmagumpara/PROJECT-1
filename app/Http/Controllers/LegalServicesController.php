<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Modules\User\Models\User;
use Auth;
use App\Repositories\PaymentRepository as Payment;
use App\Repositories\LegalCaseDetailRepository as LegalCaseDetail;
use App\Repositories\LegalCaseRepository as LegalCase;

class LegalServicesController extends Controller
{

    public function __construct(
      LegalCase $legalCase,
      LegalCaseDetail $legalCaseDetail,
      Payment $payment)
    {
      $this->legalCase = $legalCase;
      $this->legalCaseDetail = $legalCaseDetail;
      $this->payment = $payment;
    }

    public function index()
    {
      return view('legal-services.index');
    }

    public function initialLegalAssessment()
    {
      return view('legal-services.initial-legal-assessment.index');
    }

    // Auth Required Pages

     public function legalCases()
    {
      $legalCases = $this->legalCase->getAllByAttributes(['user_id' => Auth::user()->id],'created_at', 'desc');
      return view('legal-services.legal-cases.index', ['legalCases' => $legalCases]);
    }

    public function onlineLegalConsultation()
    {
      return view('legal-services.legal-cases.online-legal-consultation');
    }

    public function newLegalCase(Request $request)
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

        return redirect(route('legal-services.legal-cases.online-legal-consultation.leter-of-intent', $legalCase->id));
      }
    }

    public function letterOfIntent($id)
    {
      $legalCase = $this->legalCase->getByAttributes(['id' => $id]);
      // return $legalCase;
      return view('legal-services.legal-cases.letter-of-intent');
    }


}
