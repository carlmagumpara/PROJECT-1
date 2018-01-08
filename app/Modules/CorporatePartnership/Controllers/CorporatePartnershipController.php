<?php

namespace App\Modules\CorporatePartnership\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;
use App\Modules\User\Models\User;
use App\Http\Requests\PersonalInfoRequest;
use App\Http\Requests\CorporatePartnershipInfoRequest;
use App\Http\Requests\BoardOfDirectorRequest;
use App\Repositories\PersonalInfoRepository as PersonalInfo;
use App\Repositories\CorporatePartnershipInfoRepository as CorporatePartnershipInfo;
use App\Repositories\BoardOfDirectorRepository as BoardOfDirector;

class CorporatePartnershipController extends Controller
{
    public function __construct(
        PersonalInfo $personalInfo,
        CorporatePartnershipInfo $corporatePartnershipInfo,
        BoardOfDirector $boardOfDirector
    ) {
        $this->personalInfo = $personalInfo;
        $this->corporatePartnershipInfo = $corporatePartnershipInfo;
        $this->boardOfDirector = $boardOfDirector;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function corporatePartnershipRepresentativeInfo()
    {
        $personalInfo = $this->personalInfo->getByAttributes(['id' => Auth::user()->personalInfo->id]);
        return view('CorporatePartnership::corporate-partnership-representative-information.index', ['personalInfo' => $personalInfo]);
    }

    public function corporatePartnershipRepresentativeInfoUpdate(PersonalInfoRequest $request)
    {
        if ($this->personalInfo->update(Auth::user()->personalInfo->id, $request->all())) {
            return json_encode(array('result'=>'success', 'message'=>'Updated Successfuly!'));
        }
        return json_encode(array('result'=>'error', 'message'=>'Update Failed!'));
    }

    public function corporatePartnershipInfo()
    {
        $corporatePartnershipInfo = $this->corporatePartnershipInfo->getByAttributes(['id' => Auth::user()->corporatePartnershipInfo->id]);

        return view('CorporatePartnership::corporate-partnership-information.index', ['corporatePartnershipInfo' => $corporatePartnershipInfo, 'boardOfDirectors' => $corporatePartnershipInfo->boardOfDirectors]);
    }

    public function corporatePartnershipInfoUpdate(CorporatePartnershipInfoRequest $request)
    {
        if ($this->corporatePartnershipInfo->update(Auth::user()->corporatePartnershipInfo->id, $request->all())) {
            return json_encode(array('result'=>'success', 'message'=>'Updated Successfuly!'));
        }
        return json_encode(array('result'=>'error', 'message'=>'Update Failed!'));
    }    

    public function boardOfDirectorsAdd(BoardOfDirectorRequest $request)
    {
        $request['corporate_partnership_info_id'] = Auth::user()->corporatePartnershipInfo->id;
        $request['user_id'] = Auth::user()->id;
        if ($this->boardOfDirector->store($request->all())) {
            return json_encode(array('result'=>'success', 'message'=>'Added Successfuly!'));
        }
        return json_encode(array('result'=>'error', 'message'=>'Add Failed!'));
    }

    public function boardOfDirectorsUpdate(BoardOfDirectorRequest $request, $id)
    {
        if ($this->boardOfDirector->update($id, $request->all())) {
            return json_encode(array('result'=>'success', 'message'=>'Updated Successfuly!'));
        }
        return json_encode(array('result'=>'error', 'message'=>'Update Failed!'));
    }

    public function fetchBoardInfo($id)
    {
        return $this->boardOfDirector->getById($id);
    }

    public function boardOfDirectorsDelete($id)
    {
        if ($this->boardOfDirector->destroy($id)) {
            return json_encode(array('result'=>'success', 'message'=>'Deleted Successfuly!'));
        }
        return json_encode(array('result'=>'error', 'message'=>'Delete Failed!'));
    }

    public function boardOfDirectorsRender()
    {
        $corporatePartnershipInfo = $this->corporatePartnershipInfo->getByAttributes(['id' => Auth::user()->corporatePartnershipInfo->id]);
        return view('CorporatePartnership::partials.board-of-directors-table-partial', ['boardOfDirectors' => $corporatePartnershipInfo->boardOfDirectors])->render();
    }

}
