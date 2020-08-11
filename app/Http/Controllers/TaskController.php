<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TaskController extends Controller
{
    public function taskMaster(){
        return view('taskMaster.taskMaster');
    }

    public function addTask(){
        return view('taskMaster.addTask');
    }
}
