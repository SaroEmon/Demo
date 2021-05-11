<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Patient;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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
            'email' => $request->patientemail,
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



    public function patientEdit($id)
    {
        $patients= Patient::find($id);
        return view ('backend.layout.pms.patients.patientUpdate', compact('patients'));
    }

    public function patientUpdate(Request $request,$id)
    {
       Patient::find($id)->update([
           'patientname' => $request->patientname,
           'email' => $request->patientemail,
           'contact' => $request->contact,
           'gender' => $request->gender,
           'department' => $request->department,
           'address' => $request->address,
           'word_no' => $request->word_no,
           'password' => $request->password


        ]);
        return redirect()->route('patients')->with('success', 'Patient Updated successfully');
    }

//    Frontend

    public function userLogin()
    {
        return view('frontend.layout.Login.userLogin');
    }

    public function userRegistration()
    {
        return view('frontend.layout.Registration.userRegistration');
    }
    public function registrationCreate (Request $request)
    {
        Patient:: create ([

            'patientname' => $request->userName,
            'email' => $request->userEmail,
            'contact' => '01626949969',
            'gender' => 'male',
            'department' => 'medicine',
            'address' => 'gazipur' ,
            'word_no' => '01',
            'password' => bcrypt($request->userPassword),


        ]);
        return redirect ()->back()->with( 'success',' Successfully you have Registered');

    }






//    public function userLogin()
//    {
//        return view('frontend.layout.Login.userLogin');
//    }

    public function userLoginValidation(Request $request)
    {
//        dd($request->all());
        $request->validate([

            'email' => 'required|email',
            'password' => 'required|min:6'
        ]);
        $patients_login = $request->only('email', 'password');
//        dd($patients_login);
        if (Auth::guard('user')->attempt($patients_login)) {
            $request->session()->regenerate();
            return redirect()->route('homepage');
        }
        return back()->withErrors([
            'email' => 'Invalid Credentials.',
        ]);


    }

    public
    function userLogout()
    {
        Auth::guard('user')->logout();
        return redirect()->route('homepage')->with('success', 'Logout Successfully');
    }

}

