<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\User;
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
    protected $redirectTo = '/';

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
            'name' => ['required', 'string', 'max:191'],
            'surname' => ['required', 'string', 'max:191'],
            'username' => ['required', 'string', 'min:8', 'max:191', 'unique:users'],
            'email' => ['required', 'string', 'email', 'max:191', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            'residence' => ['required', 'string', 'max:191'], 
            'job' => ['required', 'string', 'max:191'],
            'birthday' => ['required', 'date'],
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {
        return User::create([
            'name' => $data['name'],
            'surname' => $data['surname'],
            'username' => $data ['username'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
            'avana' => $date ['residence'],
            'avana' => $date ['job'],
            'avana' => $date ['birthday'],
            'avana' => $data ['residence'],
            'avana' => $data ['job'],
            'avana' => $data ['birthday'],
            
            'avana' => $data ['residence'],
            'avana' => $data ['job'],
            'avana' => $data ['birthday'],
            'avana' => $data ['residence'],
            'avana' => $data ['job'],
            'avana' => $data ['birthday'],
        ]);
    }
}
