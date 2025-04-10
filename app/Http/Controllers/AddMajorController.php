<?php

namespace App\Http\Controllers;

use App\Models\Major;
use Illuminate\Http\Request;

class AddMajorController extends Controller
{
    public function index(){
        return  view('addmajor');

    }
    public function store(Request $request){
        $validatedData = $request->validate([
            "major" => "required|string|min:5",
            
        ]);
        
        
       

        $r = Major::create($validatedData);

        
        
        return redirect()->route("add.major")->with("success", "Major added successfully");

    }
}
