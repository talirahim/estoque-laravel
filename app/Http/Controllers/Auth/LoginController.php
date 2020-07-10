<?php

namespace estoque\Http\Controllers\Auth;

use estoque\Http\Controllers\Controller;
use estoque\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Request;
use Auth;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
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
        $this->middleware('guest')->except('logout');
    }
    /*
    public function login()
    {
        $credenciais = Request::only('email', 'password');

        if(Auth::attempt($credenciais)) {
            return "Usuário ".
                Auth::user()->name
                ." logado com sucesso";
        }

        return "As credenciais não são válidas";
    }
    */
}
