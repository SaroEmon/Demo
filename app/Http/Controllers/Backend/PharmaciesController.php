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



    public function pharmacydelete($id)
    {
        $pharmacy=Pharmacy::find($id);
        $pharmacy->delete();
        return redirect()->route('pharmacies')->with('info','Pharmacy Delete successfully');
    }





    public function pharmacyEdit($id)
    {
        $pharmacy= Pharmacy::find($id);
        return view ('backend.layout.pms.pharmacies.pharmaciesUpdate', compact('pharmacy'));
    }

    public function pharmacyUpdate(Request $request,$id)
    {
        Pharmacy::find($id)->update([
            'medicine_id' => $request->medicineId,
            'name' => $request->medicine_name,
            'department' => $request->department,


        ]);
        return redirect()->route('pharmacies')->with('success', 'Pharmacy Updated successfully');
    }
}
