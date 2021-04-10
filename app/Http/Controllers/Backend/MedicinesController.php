<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Nurse;
use Illuminate\Http\Request;
use App\Models\Medicine;

class MedicinesController extends Controller
{ public function medicines()
    {
        $medicines=Medicine::all();
        return view('backend.layout.pms.medicines.medicines',compact('medicines'));
    }
    public function medicinesCreate()
    {
        return view('backend.layout.pms.medicines.medicinesCreate');
    }
    public function medicinesList(Request $request)
    {


        Medicine::create([
            'patient_id'=>$request->patientId,
            'medicine_id'=>$request->medicineId,
            'name'=>$request->name,
            'department'=>$request->department,

        ]);

        return redirect()->route('medicines');
    }
}



