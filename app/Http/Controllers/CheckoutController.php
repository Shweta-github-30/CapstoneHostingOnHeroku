<?php

namespace App\Http\Controllers\Auth;

use App\Checkout;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

// use Illuminate\Foundation\Auth\RegistersUsers;

class CheckoutController extends Controller
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

    // use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/success';

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
            'cardholdername' => ['required', 'string', 'max:255'],
            'cardnumber' => ['required', 'string', 'min:16', 'max:16'],
            'mmyy' => ['required', 'string', 'min:4', 'max:4'],
            'cvv' => ['required', 'string', 'min:4', 'max:4']
        ]);
    }

/**
 * Create a new user instance after a valid registration.
 *
 * @param  array  $data
 * @return \App\User
 */
// protected function create(array $data)
// {
//     return User::create([
//         'firstname' => $data['firstname'],
//         'lastname' => $data['lastname'],
//         'email' => $data['email'],
//         'password' => Hash::make($data['password']),
//         'phonenumber' => $data['phonenumber'],
//         'address' => $data['address'],
//     ]);
// }
}