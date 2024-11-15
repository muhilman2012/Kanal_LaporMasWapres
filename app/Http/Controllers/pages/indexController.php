<?php

namespace App\Http\Controllers\pages;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class indexController extends Controller
{
    public function index(){
        return view('pages.index');
    }

    public function detail(){
        return view('pages.detail');
    }

    public function syarat(){
        return view('pages.syarat');
    }

    public function registrasi(){
        return view('pages.registrasi');
    }
}
