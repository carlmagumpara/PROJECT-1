<?php

namespace App\Modules\CorporatePartnership\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;
use App\Modules\User\Models\User;
use App\Http\Requests\PersonalInfoRequest;
use App\Http\Requests\CorporatePartnershipInfoRequest;
use App\Http\Requests\BoardOfDirectorRequest;
use App\Http\Requests\StockholdersRequest;
use App\Repositories\PersonalInfoRepository  as CorporatePartnershipRepresentativeInfo;
use App\Repositories\CorporatePartnershipInfoRepository as CorporatePartnershipInfo;
use App\Repositories\BoardOfDirectorRepository as BoardOfDirector;
use App\Repositories\StockholderRepository as Stockholder;

class CorporatePartnershipController extends Controller
{
    public function __construct(
        CorporatePartnershipRepresentativeInfo $corporatePartnershipRepresentativeInfo,
        CorporatePartnershipInfo $corporatePartnershipInfo,
        BoardOfDirector $boardOfDirector,
        Stockholder $stockholder
    ) {
        $this->corporatePartnershipRepresentativeInfo = $corporatePartnershipRepresentativeInfo;
        $this->corporatePartnershipInfo = $corporatePartnershipInfo;
        $this->boardOfDirector = $boardOfDirector;
        $this->stockholder = $stockholder;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function corporatePartnershipRepresentativeInfo()
    {
        $corporatePartnershipRepresentativeInfo = $this->corporatePartnershipRepresentativeInfo->getByAttributes(['id' => Auth::user()->personalInfo->id]);
        return view('CorporatePartnership::corporate-partnership-representative-information.index', ['corporatePartnershipRepresentativeInfo' => $corporatePartnershipRepresentativeInfo]);
    }

    public function corporatePartnershipRepresentativeInfoUpdate(PersonalInfoRequest $request)
    {
        if ($this->corporatePartnershipRepresentativeInfo->update(Auth::user()->personalInfo->id, $request->all())) {
            return json_encode(array('result'=>'success', 'message'=>'Updated Successfuly!'));
        }
        return json_encode(array('result'=>'error', 'message'=>'Update Failed!'));
    }

    public function corporatePartnershipInfo()
    {
        $corporatePartnershipInfo = $this->corporatePartnershipInfo->getByAttributes(['id' => Auth::user()->corporatePartnershipInfo->id]);

        return view('CorporatePartnership::corporate-partnership-information.index', ['corporatePartnershipInfo' => $corporatePartnershipInfo, 'boardOfDirectors' => $corporatePartnershipInfo->boardOfDirectors, 'stockholders' => $corporatePartnershipInfo->stockholders ]);
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

    public function stockholdersAdd(StockholdersRequest $request)
    {
        $request['corporate_partnership_info_id'] = Auth::user()->corporatePartnershipInfo->id;
        $request['user_id'] = Auth::user()->id;
        if ($this->stockholder->store($request->all())) {
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

    public function fetchStockholderInfo($id)
    {
        return $this->stockholder->getById($id);
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

    public function stockholdersUpdate(StockholdersRequest $request, $id)
    {
        if ($this->stockholder->update($id, $request->all())) {
            return json_encode(array('result'=>'success', 'message'=>'Updated Successfuly!'));
        }
        return json_encode(array('result'=>'error', 'message'=>'Update Failed!'));
    }

    public function stockholdersDelete($id)
    {
        if ($this->stockholder->destroy($id)) {
            return json_encode(array('result'=>'success', 'message'=>'Deleted Successfuly!'));
        }
        return json_encode(array('result'=>'error', 'message'=>'Delete Failed!'));
    }

    public function boardOfDirectorsRender()
    {
        $corporatePartnershipInfo = $this->corporatePartnershipInfo->getByAttributes(['id' => Auth::user()->corporatePartnershipInfo->id]);
        return view('CorporatePartnership::partials.board-of-directors-table-partial', ['boardOfDirectors' => $corporatePartnershipInfo->boardOfDirectors])->render();
    }

    public function stockholdersRender()
    {
        $corporatePartnershipInfo = $this->corporatePartnershipInfo->getByAttributes(['id' => Auth::user()->corporatePartnershipInfo->id]);
        return view('CorporatePartnership::partials.stockholders-table-partial', ['stockholders' => $corporatePartnershipInfo->stockholders])->render();
    }


}
