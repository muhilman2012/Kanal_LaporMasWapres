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

    public function reservasi(){
        return view('pages.reservasi');
    }

    public function tindaklanjut(){
        return view('pages.tindaklanjut');
    }
}
