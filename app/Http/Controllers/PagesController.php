<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){
        return view('admin.dashboard');
    }

    public function addemployee(){
        return view('admin.addemployee');
    }
}
