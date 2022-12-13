<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\Models\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

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

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
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
            'familyName' => ['required', 'string', 'max:255'],
            'firstName' => ['required', 'string', 'max:255'],
            'middleInitial' => ['required', 'string', 'max:1'],
            'maidenName' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255','unique:users'],
            'gender' => ['required', 'string'],
            // 'gender'=>'in:male,female',
            'birthday' => ['required', 'date'], 
            'civilStatus' => ['required', 'string'],
            // 'civilstatus' => 'in:Single, Married, Separated, Widow, Widower',
            'presentAddress' => ['required', 'string', 'max:255'],
            'yearGraduated' => ['required', 'integer'],
            'course' => ['required', 'string'],
            // 'course' => 'in:bsit, bsis, bscs, bscd, bsmath, bsbio',
            'examsPassed' => ['required', 'string'],
            // 'examsPassed' => 'PRC,CSE,Tesda,Other:',
            'awards' => ['required', 'string'],
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\Models\User
     */
    protected function create(array $data)
    {
        return User::create([
            'familyName' => $data['familyName'],
            'firstName' => $data['firstName'],
            'middleInitial' => $data['middleInitial'],
            'maidenName' => $data['maidenName'],
            'email' => $data['email'],
            'gender' => $data['gender'],
            'birthday' => $data['birthday'],
            'civilStatus' => $data['civilStatus'],
            'presentAddress' => $data['presentAddress'],
            'yearGraduated' => $data['yearGraduated'],
            'course' => $data['course'],
            'examsPassed' => $data['examsPassed'],
            'awards' => $data['awards'],
            'password' => Hash::make($data['password']),
        ]);
    }
}
