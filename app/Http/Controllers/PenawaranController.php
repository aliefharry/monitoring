<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PenawaranController extends Controller
{
    public function penawaran(){
        return view('penawaran.penawaran');
    }

    public function addPenawaran(){
        return view('penawaran.addPenawaran');
    }
}
