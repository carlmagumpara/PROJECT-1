<?php

namespace App\Modules\Admin\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Repositories\UserRepository as User;

class AdminController extends Controller
{

    public function __construct(
        User $user
    ) {
        $this->middleware('admin');
        $this->user = $user;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('Admin::index');
    }

    public function users()
    {
        $users = $this->user->getAllByAttributes([], 'created_at', 'desc');

        return view('Admin::users.index', ['users' => $users]);
    }

}
