<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ClimbingController extends Controller
{
    public function index(){
        return view('pages.climbing');
    }
}