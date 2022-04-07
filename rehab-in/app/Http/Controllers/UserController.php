<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(){
        return view('user.home');
    }
    public function login(){
        return view('user.login');
    }
    public function register(){
        return view('user.register');
    }
    public function forgetpw(){
        return view('user.forgetpw');
    }
    public function profile(){
        return view('user.profile');
    }
    public function consult(){
        return view('user.consult');
    }
}
