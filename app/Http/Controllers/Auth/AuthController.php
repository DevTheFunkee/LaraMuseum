<?php

namespace App\Http\Controllers\Auth;

use App\Visitatore;
use Validator;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\ThrottlesLogins;
use Illuminate\Foundation\Auth\AuthenticatesAndRegistersUsers;
use Illuminate\Http\Request;
use Auth;

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
     * Where to redirect users after login / registration.
     *
     * @var string
     */
    protected $redirectTo = '/';
    public $username = 'LOGIN';
    /**
     * Create a new authentication controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware($this->guestMiddleware(), ['except' => 'logout']);
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
            'COGNOME' => 'required',
            'NOME' => 'required',
            'TELEFONO' => 'required',
            'LOGIN' => 'required',
            'EMAIL' => 'required|email|max:255|unique:visitatori',
            'password' =>  'required|min:6',
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
        return Visitatore::create([
            'COGNOME' => $data['COGNOME'],
            'NOME' => $data['NOME'],
            'TELEFONO' => $data['TELEFONO'],
            'LOGIN' => $data['LOGIN'],
            'EMAIL' => $data['EMAIL'],
            'password' => bcrypt($data['password']),
        ]);
    }
    public function logout(){
        \Auth::logout();
        return redirect()->route('auth.login');

    }
}
