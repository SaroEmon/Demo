<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Doctor;
use Illuminate\Http\Request;
use App\Models\Pharmacy;

class PharmaciesController extends Controller
{
    public function pharmacies()
    {
        $pharmacies=Pharmacy::all();
        $pharmacies =Pharmacy::paginate(3);
        return view('backend.layout.pms.pharmacies.pharmacies',compact('pharmacies'));
    }
    public function pharmaciesCreate()
    {
        return view('backend.layout.pms.pharmacies.pharmaciesCreate');
    }
    public  function PharmaciesList(Request $request)
    {
        Pharmacy::create([
            'patient_id' => $request->patientId,
            'name' => $request->name,
            'contact' => $request->contact,
            'department' => $request->department,
            'password' => $request->password


        ]);

        return redirect()->route('pharmacies');
    }
}
