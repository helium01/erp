<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class homecontrol extends Controller
{
    //
    public function home(){
        return view('home');
    }
}
