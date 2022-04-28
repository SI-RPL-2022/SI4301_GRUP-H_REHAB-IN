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

    public function riwayat(){
        return view('user.riwayat');
    }

    public function notes(){
        return view('user.notes');
    }

    public function profile(){
        return view('user.profile');
    }

    public function editprofile(){
        return view('user.profile-edit');
    }
    public function services(){
        return view('user.service');
    }
    public function reservasi(){
        return view('user.reservasi');
    }
    public function ruangan(){
        return view('user.ruangan');
    }
    public function dokter(){
        return view('user.dokter');
    }
    public function edukasi(){
        return view('user.service');
    }
    public function total(){
        return view('user.result');
    }
    public function jadwal(){
        return view('user.jadwal');
    }
    public function invoicedoc(){
        return view('user.result');
    }
    public function konsultasi(){
        return view('user.konsultasi');
    }
    public function history(){
        return view('user.historypayment');
    }
}
