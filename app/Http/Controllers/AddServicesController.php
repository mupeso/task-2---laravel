<?php

namespace App\Http\Controllers;

use App\Models\service;
use Illuminate\Http\Request;

class AddServicesController extends Controller
{
    public function index(){
        return  view('addservice');

    }
    public function store(Request $request){
        $validatedData = $request->validate([
            "title" => "required|string|min:5",
            
        ]);
        
        
       

        $r = service::create($validatedData);

        
        
        return redirect()->route("add.Services")->with("success", "Service added successfully");

    }
}
