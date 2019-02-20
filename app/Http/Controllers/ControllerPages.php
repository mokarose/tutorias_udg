<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ControllerPages extends Controller
{

    public function HomeSiteController(){
        return view("home");
    }

    public function HomeStudentController(){
        return view("student.home");
    }
}
