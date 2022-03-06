<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    function index(){
        return view('admin.dashboard');
    }
    function calendar(){
        return view('admin.calendar');
    }
    function tables(){
        return view('admin.tables');
    }
    function detailbarang(){
        return view('admin.detailbarang');
    }
    function daftarbarang(){
        return view('admin.daftarbarang');
    }
    function cekout(){
        return view('admin.cekout');
    }
}
