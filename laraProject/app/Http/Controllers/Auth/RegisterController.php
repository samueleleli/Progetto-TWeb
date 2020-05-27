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
    protected $redirectTo = '/user';

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
            'name' => ['required', 'string', 'max:255'],
            'surname' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            'username' => ['required', 'string', 'min:8', 'unique:users'],
            'via' => ['required', 'string', 'max:255'],
            'citta' => ['required', 'string', 'max:100'],
            'cap' => ['required', 'string', 'max:20'],
            'stato' => ['required', 'string', 'max:50'],
            'dataNascita' => ['required', 'date', 'max:255'],
            'occupazione' => ['required', 'string', 'max:255'],
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
            'nome' => $data['name'],
            'cognome' => $data['surname'],
            'email' => $data['email'],
            'via' => $data['via'],
            'citta' => $data['citta'],
            'cap' => $data['cap'],
            'stato' => $data['stato'],
            'dataNascita' => $data['dataNascita'],
            'occupazione' => $data['occupazione'],
            'username' => $data['username'],
            'password' => Hash::make($data['password']),
            
        ]);
    }
}
