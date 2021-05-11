<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Appointment;
use Illuminate\Http\Request;

class AppointmentController extends Controller
{
    public function appointments()
    {
        $appointments = Appointment::all();
        $appointments = Appointment::paginate(3);
        return view('backend.layout.pms.appointments.appointmentList', compact('appointments'));
    }

    public function appointmentsCreate()
    {
        return view('backend.layout.pms.appointments.appointmentCreate');
    }

    public function appointmentsList(Request $request)
    {


        Appointment::create([
            'patientname' => $request->name,
            'patientemail' => $request->email,
            'contact' => $request->patientContact,
            'department_id' => $request->departmentId,
            'doctor_id' => $request->doctorId,
            'date' => $request->date,
            'message' => $request->message,
        ]);

        return redirect()->route('appointments');

    }

    public function appointmentDelete($id)
    {
        $appointment = Appointment::find($id);
        $appointment->delete();
        return redirect()->route('appointments')->with('success', 'Appointment Delete successfully');
    }

    public function appointmentFormCreate(Request $request)
    {
//        dd($request->all());
        Appointment::create([
            'patientname' => $request->userName,
            'patientemail' => $request->userEmail,
            'contact' => $request->userPhone,
            'department_id' => $request->department,
            'doctor_id' => $request->doctor,
            'date' => $request->userdate,
            'message' => $request->message,
        ]);
        return redirect()->back();
    }



    public function appointmentEdit($id)
    {
        $appointments= Appointment::find($id);
        return view ('backend.layout.pms.appointments.appointmentUpdate', compact('appointments'));
    }

    public function appointmentUpdate(Request $request,$id)
    {
        Appointment::find($id)->update([
            'patientname' => $request->name,
//            'image' => $file_name,
            'patientemail' => $request->email,
            'contact' => $request->contact,
            'department_id' => $request->departmentId,
            'doctor_id' => $request->doctorId,
            'date' => $request->date,
            'message' =>$request->message,
        ]);
        return redirect()->route('appointments')->with('success', 'Appointment Updated successfully');
    }
}

