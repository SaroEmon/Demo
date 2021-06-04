<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Appointment;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function userProfile()
    {
        return view ('frontend.layout.UserProfile.userProfile');
    }

    public function userProfileView()
    {
        $appointments=Appointment::with('doctorAppointment')->where('patientId',auth('user')->user()->id)->get();
        return view('frontend.layout.userProfile.userProfileView',compact('appointments'));
    }
}
