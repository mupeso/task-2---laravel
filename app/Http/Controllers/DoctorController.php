<?php

namespace App\Http\Controllers;

use App\Models\Doctor;
use App\Models\reservation;
use Illuminate\Http\Request;

class DoctorController extends Controller
{

    public function index (){


        return view('doctors.pages.doctor');

    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            "name" => "required|string|min:5",
            "email" => "required|email|max:255",
            "phone" => "required|max:15|regex:/^[0-9+]+$/",
        ]);
        
        
        // $r=reservation::create([
        //     "name"=>$request->name,
        //     "email"=>$request->email,
        //     "phone"=>$request->phone
        // ]);

        $r = reservation::create($validatedData);

        //  reservation::create($validatedData);

        // return redirect("/");
        
        return redirect()->route("doctor")->with("success", "Reservation added successfully");
    }
}
    
