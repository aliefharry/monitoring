<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RabController extends Controller
{
    public function rab(){
        return view('rab.rab');
    }

    public function addRab(){
        return view('rab.addRab');
    }
}
