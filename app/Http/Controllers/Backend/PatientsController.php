<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Patient;
use Illuminate\Http\Request;

class PatientsController extends Controller
{
    public function patients()
    {
        $patients=Patient::all();
        $patients=Patient::paginate(3);
        return view('backend.layout.pms.patients.patients',compact('patients'));
    }
    public function patientsCreate()
    {
        return view('backend.layout.pms.patients.patientsCreate');
    }
    public function patientsList(Request $request)
    {








        Patient::create([
            'patientname' => $request->patientname,
            'patientemail' => $request->patientemail,
            'contact' => $request->contact,
            'gender' => $request->gender,
            'department' => $request->department,
            'address' => $request->address,
            'word_no' => $request->word_no,
            'password' => $request->password
        ]);

        return redirect()->route('patients');

    }
    public function patientDelete($id)
    {
        $patient=Patient::find($id);
        $patient->delete();
        return redirect()->route('patients')->with('success','Patient Delete successfully');
    }
}
