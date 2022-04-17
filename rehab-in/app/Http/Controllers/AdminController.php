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

    public function tipskes(){
        return view('admin.tips');
    }

    public function jadwalkonsul(){
        return view('admin.jadwalkonsul');
    }

    public function notes(){
        return view('admin.notes');
    }

    public function service(){
        return view('admin.services');
    }

    public function reservasi(){
        return view('admin.reservasi');
    }

    public function listdokter(){
        return view('admin.listdokter');
    }

    public function edukasi(){
        return view('admin.edukasi');
    }

    public function dbpasien(){
        return view('admin.dbpasien');
    }

    public function dbdokter(){
        return view('admin.dbdokter');
    }

    public function kamar(){
        return view('admin.kamar');
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
