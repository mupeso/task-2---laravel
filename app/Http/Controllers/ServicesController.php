<?php

namespace App\Http\Controllers;

use App\Models\service;
use Illuminate\Http\Request;

class ServicesController extends Controller
{
    public function index (){

        $services=service::with("service")->get();


        // return($services);
        return view('Services',compact("services"));
    }
}
