<?php

namespace App\Http\Controllers;

use App\Models\Doctor;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index (){

        // $x=Doctor::with("service")->get();

        $x=Doctor::with("major")->get();

        // return ($x);
        return view('doctors.pages.index',compact("x"));
    }
}
