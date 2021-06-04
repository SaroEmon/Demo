<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\PasswordReset;
use App\Models\Patient;
use App\Mail\PasswordResetMail;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Mail;


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
            'contact' =>$request->usercontact,
            'gender' => $request->gender,
            'department' =>$request-> department,
            'address' => $request-> address ,
            'nationalID' => $request-> nationalID ,

            'password' => bcrypt($request->userPassword),


        ]);
        return redirect ()->route('user.login')->with( 'success',' Successfully you have Registered');

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


    public function passwordRecoverEmail()
    {
        return view('frontend.layout.Login.resetPasswordEmail');
    }

    public function passwordRecoverEmailPost(Request $request)
    {
        $userEmailValidate=Patient::where('email',$request->email)->first();

        $token = Str::random(40);


        if ($userEmailValidate)
        {
            $password=PasswordReset::insert([

                'email'=>$request->email,
                'token'=>$token

            ]);
            Mail::to($request->email)->send(new PasswordResetMail($password,$token));

            return redirect()->back()->with('success','An Email Was Sent to Your Email. PLease Check !!!');

        }else{

            return redirect()->back()->with('successError','Email Did not Match with our database. please try again !!!');
        }

    }


    public function passwordForm($id)
    {

            $tokenValidate=PasswordReset::where('token',$id)->first();

            if ($tokenValidate)
            {

                return view('frontend.layout.Login.updatePassword',compact('tokenValidate'));

            }else{


                return redirect()->route('password.recover.email.form')->with('successError','Token Expired. Reset Again.');
            }

    }


    public function passwordUpdate(Request  $request)
    {
        $passwordUpdate=Patient::where('email',$request->email)->update([

            'password'=>bcrypt($request->password)

        ]);

        PasswordReset::where('email',$request->email)->delete();
        return redirect()->route('user.login')->with('success','Password Reset Successfully');
    }



}

