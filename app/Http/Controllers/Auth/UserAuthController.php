<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;



class UserAuthController extends Controller
{
    function login(){
        return view('auth.login');
    }
}
