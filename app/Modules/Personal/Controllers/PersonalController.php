<?php

namespace App\Modules\Personal\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;
use App\Modules\User\Models\User;
use App\Http\Requests\PersonalInfoRequest;
use App\Http\Requests\ChildrenInfoRequest;
use App\Repositories\PersonalInfoRepository as PersonalInfo;
use App\Repositories\SpouseRepository as SpouseInfo;
use App\Repositories\ChildrenInfoRepository as ChildrenInfo;
use App\Repositories\ChildrenListRepository as ChildrenList;

class PersonalController extends Controller
{

    public function __construct(
        PersonalInfo $personalInfo,
        SpouseInfo $spouseInfo,
        ChildrenInfo $childrenInfo,
        ChildrenList $childrenList
    ) {
        $this->middleware('auth');
        $this->personalInfo = $personalInfo;
        $this->spouseInfo = $spouseInfo;
        $this->childrenInfo = $childrenInfo;
        $this->childrenList = $childrenList;
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function personalInfo()
    {
        $personalInfo = $this->personalInfo->getByAttributes(['id' => Auth::user()->personalInfo->id]);
        return view('Personal::personal-information.index', ['personalInfo' => $personalInfo]);
    }

    public function personalInfoUpdate(PersonalInfoRequest $request)
    {
        if ($this->personalInfo->update(Auth::user()->personalInfo->id, $request->all())) {
            if ($this->checkIfMarried($request->civil_status)) {
                return json_encode(array('result'=>'redirect', 'message'=>'Redirect to SpouseInfo!'));
            }
            return json_encode(array('result'=>'success', 'message'=>'Updated Successfuly!'));
        }
        return json_encode(array('result'=>'error', 'message'=>'Update Failed!'));
    }

    public function checkIfMarried($civilStatus)
    {
        if ($civilStatus == 'Married') {
            if (empty($this->spouseInfo->getByAttributes(['user_id' => Auth::user()->id]))) {
                $data = ['user_id' => Auth::user()->id];
                $this->spouseInfo->store($data);
            }
            return true;
        } else {
            if (!empty($this->spouseInfo->getByAttributes(['user_id' => Auth::user()->id]))) {
                $this->spouseInfo->destroy(Auth::user()->spouseInfo->id);
            }
            return false;
        }
        return false;
    }

    public function spouseInfo()
    {
        $spouseInfo = $this->spouseInfo->getByAttributes(['user_id' => Auth::user()->id]);
        return view('Personal::spouse-information.index', ['spouseInfo' => $spouseInfo]);
    }

    public function spouseInfoUpdate(PersonalInfoRequest $request)
    {
        if ($this->spouseInfo->update(Auth::user()->spouseInfo->id, $request->all())) {
            return json_encode(array('result'=>'success', 'message'=>'Updated Successfuly!'));
        }
        return json_encode(array('result'=>'error', 'message'=>'Update Failed!'));
    }

    public function childrenInfo()
    {
        $childrenInfo = $this->childrenList->getAllByAttributes(['user_id' => Auth::user()->id], 'id', 'DESC');
        return view('Personal::children-information.index', ['childrenInfo' => $childrenInfo]);
    }

    public function childrenInfoAdd(ChildrenInfoRequest $request)
    {
        $request['user_id'] = Auth::user()->id;
        $request['children_info_id'] = Auth::user()->childrenInfo->first()->id;
        if ($this->childrenList->store($request->all())) {
            return json_encode(array('result'=>'success', 'message'=>'Added Successfuly!'));
        }
        return json_encode(array('result'=>'error', 'message'=>'Add Failed!'));
    }

    public function childrenInfoDelete(Request $request, $id) 
    {
        if ($this->childrenList->destroy($id)) {
            return json_encode(array('result'=>'success', 'message'=>'Deleted Successfuly!'));
        }
        return json_encode(array('result'=>'error', 'message'=>'Delete Failed!'));
    }

    public function childrenListUpdate(Request $request)
    {
        $this->childrenInfo->update(Auth::user()->childrenInfo->first()->id, $request->all());
        return 'true';
    }

    public function fetchChildInfo($id)
    {
        return $this->childrenList->getById($id);
    }

    public function childrenInfoUpdate(ChildrenInfoRequest $request, $id)
    {
        if ($this->childrenList->update($id, $request->all())) {
            return json_encode(array('result'=>'success', 'message'=>'Updated Successfuly!'));
        }
        return json_encode(array('result'=>'error', 'message'=>'Update Failed!'));
    }

    public function childrenTableRender()
    {
        $childrenInfo = $this->childrenList->getAllByAttributes(['user_id' => Auth::user()->id], 'id', 'DESC');
        return view('Personal::partials.children-table-partial', ['childrenInfo' => $childrenInfo])->render();
    }
}
