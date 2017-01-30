<?php

namespace App\Http\Controllers;

use App\User;
use Psr\Log;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function doLogin()
    {

    }

    public function showLogin()
    {
        return view('authform');
    }
}