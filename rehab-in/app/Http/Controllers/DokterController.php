<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DokterController extends Controller
{
    public function index(){
        return view('dokter.home');
    }
    public function profile(){
        return view('dokter.profile');
    }
    public function edit(){
        return view('dokter.edit');
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
