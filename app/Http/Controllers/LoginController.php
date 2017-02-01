<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Psr\Log;
use Illuminate\Http\Request;
use Tymon\JWTAuth\JWTAuth;


class LoginController extends Controller
{
    protected $jwt;

    public function __construct(JWTAuth $jwt)
    {
        $this->jwt = $jwt;
    }

    public function doLogin(Request $request)
    {
        $this->validate($request, [
            'email'    => 'required|email|max:255',
            'password' => 'required',
        ]);

        $credentials = $request->only('email', 'password');

        if(Auth::attempt($credentials, $request->has('remember'))) {
            //dd(Auth::user());
            return redirect('/');
        } else {
            //dd($request);
            return redirect('/login');
        }
    }

    public function showLogin()
    {
        return view('authform');
    }
    
    public function doLogout()
    {
        Auth::logout();
        return Redirect::to('login');
    }
}