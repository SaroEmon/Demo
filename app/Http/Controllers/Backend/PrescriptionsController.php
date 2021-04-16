<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Prescription;
use Illuminate\Http\Request;

class PrescriptionsController extends Controller
{
    public function prescriptions()
    {
        $prescriptions=Prescription::all();
        $prescriptions=Prescription::paginate(3);
        return view('backend.layout.pms.prescriptions.prescriptions',compact('prescriptions'));
    }
    public function prescriptionsCreate()
    {
        return view('backend.layout.pms.prescriptions.prescriptionsCreate');
    }
    public function prescriptionsList(Request $request)
    {


        Prescription::create([
            'patient_id'=>$request->patientId,
            'quantity'=>$request->quantity,
            'consumption_amount'=>$request->consumptionAmount,
            'department'=>$request->department,
            'date'=>$request->date,

        ]);

        return redirect()->route('prescriptions');
    }
}
