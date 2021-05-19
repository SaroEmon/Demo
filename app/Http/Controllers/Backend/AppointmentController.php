<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Appointment;
use App\Mail\AppointmentMail;
use App\Models\Patient;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

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


        // whereDateTime('created_at',now()->subHour()->format('Y-m-d h:i:s'))
        //

//        now()->format('Y-m-d') > $data->expire_at;
        $patient = Patient::find(auth('user')->user()->id);
//        $bookingDate= strtotime($request->userdate);
        $bookingDate = date("Y-m-d h:i:s", strtotime($request->userdate));


//        dd($bookingDate);
//        $daysCalculate = round($daysCalculate / (60 * 60 * 24)) + 1;
        //need to check the room/ the flat/ car/ bike is available to booked or not
//        $fromDate = date("Y-m-d h:i:s", strtotime($request->from));
//        $toDate = date("Y-m-d h:i:s", strtotime($request->from));

        if ($bookingDate<now()->format('Y-m-d')||$bookingDate==now()->format('Y-m-d')){
            return redirect()->back()->with('danger', 'can not take appointment for current day or previous days !!! ');
            }else{
        $userCheck = Appointment::where('patientId', auth('user')->user()->id)->where('date', $request->userdate)->where('doctor_id', $request->doctor)->first();

        if ($userCheck) {
            return redirect()->back()->with('danger', 'You already booked this Doctor for this day!!! ');
        } else {

            $checkBook = Appointment::where('date', $request->userdate)->where('doctor_id', $request->doctor)->get();
            //            ->where('user_id',auth()->user()->id) // for this user
//                    ->where('slot_id',$request->slot_id) //for specific slot


//                $checkBook->where(function ($query) use ($fromDate, $toDate) {
//                    $query->whereBetween('fromDate', [$fromDate, $toDate])
//                        ->orWhereBetween('toDate', [$fromDate, $toDate]);
//                });
//                $checkBook = $checkBook->get();


            if (count($checkBook) < 2) {
                //if available then create booking/reservation
                $appointment = Appointment::create([
                    'patientname' => $request->userName,
                    'patientId' => auth('user')->user()->id,
                    'patientemail' => auth('user')->user()->email,
                    'contact' => $request->userPhone,
                    'doctor_id' => $request->doctor,
                    'date' => $bookingDate,
                    'message' => $request->message,
                ]);


                Mail::to(auth('user')->user()->email)->send(new AppointmentMail($appointment));


                return redirect()->back()->with('success', 'Booking Created Successfully');
            } else {
                return redirect()->back()->with('danger', 'doctor limit reached .Book another doctor');

            }
        }}
    }










//        $appointment=AppointmentMail::create([
//            'patientname' => $request->name,
//            'patientemail' => $request->email,
//            'contact' => $request->patientContact,
//            'department_id' => $request->departmentId,
//            'doctor_id' => $request->doctorId,
//            'date' => $request->date,
//            'message' => $request->message,
//        ]);
//
//        return redirect()->route('appointments');
//
//    }

    public function appointmentDelete($id)
    {
        $appointment = Appointment::find($id);
        $appointment->delete();
        return redirect()->route('appointments')->with('success', 'AppointmentMail Delete successfully');
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
        return redirect()->route('appointments')->with('success', 'AppointmentMail Updated successfully');
    }
}

