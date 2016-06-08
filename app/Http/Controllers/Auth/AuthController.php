<?php

namespace App\Http\Controllers\Auth;

use App\Angel;
use App\Homeless;
use App\User;
use Validator;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\ThrottlesLogins;
use Illuminate\Foundation\Auth\AuthenticatesAndRegistersUsers;

class AuthController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Registration & Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users, as well as the
    | authentication of existing users. By default, this controller uses
    | a simple trait to add these behaviors. Why don't you explore it?
    |
    */

    use AuthenticatesAndRegistersUsers, ThrottlesLogins;

    /**
     * Create a new authentication controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest', ['except' => 'getLogout']);
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
            'name' => 'required|max:255',
            'email' => 'required|email|max:255|unique:users',
            'password' => 'required|confirmed|min:6',
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
        $angelRole = $data['admin'];
        $user =  User::create([
            'name' => $data['name'],
            'username' => $data['username'],
            'admin' => $data['admin'],
            'email' => $data['email'],
            'password' => bcrypt($data['password']),
        ]);
        if ($angelRole == 2) {
           Angel::create([
               'user_id' => $user->id,
               'name' => $data['name'],
               'address' => $data['address'],
               'profession' => $data['profession'],
               'date_of_birth' => $data['a_date_of_birth'],
               'anonymous' => $data['anonymous'],
               'picture' => $data['picture'] ? null : '',
           ]);
        } else {
            Homeless::create([
                'user_id' => $user->id,
                'nickname' => $data['username'],
                'address' => $data['address'],
                'location' => $data['location'],
                'date_of_birth' => $data['date_of_birth'],
                'picture' => $data['hlPicture'] ? null : '',
            ]);
        }
        return $user;
    }
}
