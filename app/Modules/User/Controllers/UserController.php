<?php

namespace App\Modules\User\Controllers;

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

class UserController extends Controller
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

}
