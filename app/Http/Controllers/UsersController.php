<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UsersController extends Controller
{
    public function users(){
        return view('users.users');
    }

    public function addUsers(){
        return view('users.addUsers');
    }
}
