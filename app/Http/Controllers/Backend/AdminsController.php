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
            'role' => $request->adminRole,
            'image' => $file_name,
            'email' => $request->email,
            'contact' => $request->contact,
            'gender' => $request->gender,
            'shift' => $request->shift,
            'address' => $request->address,
            'password' => bcrypt($request->password)


        ]);

        return redirect()->route('admins');
    }




    public function admindelete($id)
    {
        $admin = Admin::find($id);
        $admin->delete();
        return redirect()->route('admins')->with('success', 'Admin Delete successfully');
    }





    public function adminEdit($id)
    {
        $admin= Admin::find($id);
        return view ('backend.layout.pms.admins.adminsEdit', compact('admin'));
    }

    public function adminUpdate(Request $request,$id)
    {
        Admin::find($id)->update([
            'name' => $request->name,
//            'image' => $file_name,
            'email' => $request->email,
            'contact' => $request->contact,
            'gender' => $request->gender,
            'shift' => $request->shift,
            'address' => $request->address,
            'password' => bcrypt($request->password)
        ]);
        return redirect()->route('admins')->with('success', 'Admin Updated successfully');
    }










    public function adminlogin()
    {
        return view('backend.layout.pms.login.login');
    }

    public function loginValidation(Request $request)
    {
//        dd($request->all());
        $request->validate([

            'email' => 'required|email',
            'password' => 'required|min:6'
        ]);
        $admin_login = $request->only('email', 'password');
//        dd($admin_login);
        if (Auth::attempt($admin_login)) {
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
            return redirect()->route('adminLogout.view')->with('success', 'Logout Successfully');
        }

    }


