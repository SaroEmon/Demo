<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Medicine;

class MedicinesController extends Controller
{ public function medicines()
    {
        $medicines=Medicine::all();
        $medicines=Medicine::paginate(3);
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
    public function medicinedelete($id)
    {
        $medicine=Medicine::find($id);
        $medicine->delete();
        return redirect()->route('medicine')->with('success','Medicine Delete successfully');
    }
}



