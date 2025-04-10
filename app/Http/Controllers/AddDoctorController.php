<?php

namespace App\Http\Controllers;

use App\Models\Doctor;
use App\Models\Major;
use App\Models\service;
use Illuminate\Http\Request;

class AddDoctorController extends Controller
{
    public function index (){
        $service = service::all();
        $majors = Major::all();
        return  view('doctors.pages.adddoctor',compact("service","majors"));
    }
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            "name" => "required|string|min:5",
            'service_id' => 'required|integer|exists:services,id',
            'major_id' => 'required|integer|exists:majors,id',
        ]);
        
        
       

        $r = Doctor::create($validatedData);

        
        
        return redirect()->route("add.doctor")->with("success", "Doctor added successfully");
    }
}
