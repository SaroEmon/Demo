<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Admin;
use Illuminate\Support\Facades\Auth;

class AdminsController extends Controller
{
    public function admins()
    {

        $admins = Admin::all();
        $admins = Admin::paginate(2);
        return view('backend.layout.pms.admins.admins', compact('admins'));
    }

    public function adminsCreate()
    {
        return view('backend.layout.pms.admins.adminsCreate');
    }

    public function adminsList(Request $request)
    {


        $file_name = "";
        if ($request->hasFile('adminImage')) {

            $file = $request->file('adminImage');
            if ($file->isValid()) {

                $file_name = date('Ymdms') . "." . $file->getClientOriginalExtension();
                $file->storeAs('admins', $file_name);
            }
        }


        Admin::create([
            'name' => $request->name,
            'image' => $file_name,
            'email' => $request->email,
            'contact' => $request->contact,
            'gender' => $request->gender,
            'shift' => $request->shift,
            'address' => $request->address,
            'password' => $request->password


        ]);

        return redirect()->route('admins');
    }

    public function admindelete($id)
    {
        $admin = Admin::find($id);
        $admin->delete();
        return redirect()->route('admins')->with('success', 'Admin Delete successfully');
    }

    public function adminlogin()
    {
        return view('backend.layout.pms.login.login');
    }

    public function loginValidation(Request $request)
    {
//        dd($request->all());
        $request->validate([

            'adminemail' => 'required|email',
            'pass' => 'required|min:6'
        ]);
        $credentials = $request->only('email', 'password');
//        dd($credentials);
        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            return redirect()->route('home');
        }
        return back()->withErrors([
            'email' => 'Invalid Credentials.',
        ]);


    }

        public
        function adminLogout()
        {
            Auth::logout();
            return redirect()->route('adminlogin.view')->with('success', 'Logout Successfully');
        }

    }


