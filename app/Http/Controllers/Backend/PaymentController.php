<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Appointment;
use App\Models\Payment;
use Illuminate\Http\Request;

class PaymentController extends Controller
{
    public  function paymentForm($id)
    {

        $verify=Payment::where('patient_id',auth('user')->user()->id)->where('appointment_id',$id)->first();
        if($verify){
            return redirect()->back()->with('danger','You already made payment request for this appointment');
        }else
            {

            $payment=Appointment::find($id);
            return view ('frontend.layout.payment.paymentView',compact('payment'));

        }





    }
    public function paymentView(Request $request)
    {

        Payment::create([
            'appointment_id' => $request->appointmentId,
            'patient_id'=>auth('user')->user()->id,
            'bkash_no' => $request->bkashNo,
            'transaction_id' => $request->transactionId,
        ]);

        return redirect()->route('payment.list');

    }

    public function paymentList()
    {
        $appointments=Payment::where('patient_id',auth('user')->user()->id)->get();
        return view('frontend.layout.payment.paymentTableList',compact('appointments'));
    }
}
