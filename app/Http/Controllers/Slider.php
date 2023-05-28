<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class slider extends Controller
{
    public function index(){
        return view('admin.slider');
    }
}
