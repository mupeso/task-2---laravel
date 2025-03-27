<?php

namespace App\Http\Controllers;

use App\Models\Doctor;
use App\Models\Major;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index (){

        $x=Doctor::with("major")->get();
        
        return view('index',compact("x"));

    }
}
