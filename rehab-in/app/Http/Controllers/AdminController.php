<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index(){
        return view('admin.home');
    }
    
    public function artikel(){
        return view('admin.article');
    }

    public function login(){
        return view('');
    }
    public function register(){
        return view('');
    }
    public function forgetpw(){
        return view('');
    }
}
