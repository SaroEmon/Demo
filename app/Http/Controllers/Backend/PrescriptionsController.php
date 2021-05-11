<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Appointment;
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
    public function prescriptionsCreate($id)
    {

        $prescription=Appointment::find($id);

        return view('backend.layout.pms.prescriptions.prescriptionsCreate',compact('prescription'));
    }


    public function prescriptionsList(Request $request)
    {


       $p=Prescription::create([
            'patient_id'=>$request->patientId,
            'name'=>$request->name,
            'age'=>$request->age,
            'gender'=>$request->patient_gender,
            'medicine_name'=>$request->medicine_name,
            'content'=>$request->prescription_content,
            'department'=>$request->department,
            'date'=>$request->date,

        ]);

        return redirect()->route('prescriptions');
    }


    public function prescriptiondelete($id)
    {
        $prescription=Prescription::find($id);
        $prescription->delete();
        return redirect()->route('prescriptions')->with('success','Prescription Delete successfully');
    }





//    public function prescriptionEdit($id)
//    {
//        $prescription= Prescription::find($id);
//        return view ('backend.layout.pms.prescriptions.prescriptionUpdate', compact('prescription'));
//    }
//
//    public function prescriptionUpdate(Request $request,$id)
//    {
//        Prescription::find($id)->update([
//            'medicine_id' => $request->medicineId,
//            'name' => $request->medicine_name,
//            'department' => $request->department,
//
//
//        ]);
//        return redirect()->route('prescriptions')->with('success', 'Prescription Updated successfully');
//    }
}




