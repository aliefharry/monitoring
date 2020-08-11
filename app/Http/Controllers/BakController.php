<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BakController extends Controller
{
    public function bak(){
        return view('bak.bak');
    }

    public function addBak(){
        return view('bak.addBak');
    }
}
