<?php

namespace App\Http\Controllers;

use App\Models\Major;
use Illuminate\Http\Request;

class MajorsController extends Controller
{
    public function index (){

        $majors=Major::get();
        return view('majors',compact("majors"));

    }
}
