<?php

namespace App\Http\Controllers;
use App\Models\Artikel;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ArtikelController extends Controller
{
    public function index()
    {
        $artikel = Artikel::all();

        return view('admin.article');
    }


}
