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
            'medicine_id'=>$request->medicineId,
            'name'=>$request->name,
            'department'=>$request->department,

        ]);

        return redirect()->route('medicines.view');
    }
    public function medicinedelete($id)
    {
        $medicine=Medicine::find($id);
        $medicine->delete();
        return redirect()->route('medicines.view')->with('success','Medicine Delete successfully');
    }





    public function medicineEdit($id)
    {
        $medicines= Medicine::find($id);
        return view ('backend.layout.pms.medicines.medicinesUpdate', compact('medicines'));
    }

    public function medicineUpdate(Request $request,$id)
    {
        Medicine::find($id)->update([
            'medicine_id' => $request->medicineId,
            'name' => $request->medicine_name,
            'department' => $request->department,


        ]);
        return redirect()->route('medicines')->with('success', 'Medicine Updated successfully');
    }
}



