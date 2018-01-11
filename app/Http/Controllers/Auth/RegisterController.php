<?php

namespace App\Http\Controllers\Auth;

use App\Modules\User\Models\User;
use App\PersonalInfo;
use App\Modules\CorporatePartnership\Models\CorporatePartnershipInfo;
use App\Modules\Personal\Models\Spouse;
use App\Modules\Personal\Models\ChildrenInfo;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Mail;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/thank-you';

    /**
     * Create a new controller instance.
     *
     * @return void 
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    public function showRegistrationForm()
    {
        return view('auth.register');
    }

    public function register(Request $request)
    {
        $this->validator($request->all())->validate();
        if (isset($request['end-user-agreement'])) {
            $user = $this->create($request->all());
            return json_encode(array('result'=>'success', 'message'=>'Registered Successfuly!'));
        } else {
            return json_encode(array('result'=>'show_agreement', 'message'=>'Show End User Agreement Modal!'));
        }
        return json_encode(array('result'=>'error', 'message'=>'Register Unsuccessfuly!'));
    }


    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'type' => 'required',
            'first_name' => 'required|max:255',
            'last_name' => 'required|max:255',
            'email' => 'required|email|max:255|unique:users',
            'password' => 'required|min:6|confirmed',
            'gender' => 'required',
            'birth_date' => 'required|date',
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return User
     */
    protected function create(array $data)
    {
        $user = User::create([
            'type' => $data['type'],
            'email' => $data['email'],
            'password' => bcrypt($data['password']),
            'activation_code' => md5($data['email'].time()),
            'referred_by' => $data['referred_by'],
        ]);

        PersonalInfo::create([
            'user_id' => $user->id,
            'email' => $data['email'],
            'first_name' => $data['first_name'],
            'last_name' => $data['last_name'],
            'gender' => $data['gender'],
            'birth_date' => $data['birth_date'],
            'age' => $data['age'],
        ]);

        ChildrenInfo::create([
            'user_id' => $user->id,
        ]);

        if ($user->type == 'Corporation') {
            CorporatePartnershipInfo::create([
                'user_id' => $user->id,
            ]);
        }

        $emailInfo = [
            'name' => $data['first_name'].' '.$data['last_name'],
            'email' => $data['email'],
            'link' => route('auth.verified-account', $user->activation_code),
        ];

        Mail::send('layouts.mail.verification-code', $emailInfo, function($message) use ($data){
            $message->from('info@e-lawyersonline.com', 'E-LawyersOnline.com');
            $message->to($data['email'], $data['first_name'].' '.$data['last_name'])->subject('Credentials Verification - E-Lawyers Online');
        });


    }

    public function verifiedAcount($code) 
    {
        $user = User::where('activation_code', $code)->get();
        if (count($user) !== 0) {
            User::where('activation_code', $code)->update(['status' => 'Active']);
            $message = 'Your account has been verified.';   
        } else {
            $message = 'There\'s an error verifying your account!';
        }
        return view('auth.verified-account', ['message' => $message]);
    }

    public function thankYou() 
    {
        return view('auth.thank-you');
    }

}
