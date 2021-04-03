<?php

namespace App\Http\Controllers\Backend;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Models\Doctor;

class DoctorsController extends Controller
{
    public function doctors()
    {

        $doctors=Doctor::all();
        return view('backend.layout.pms.doctors.doctors',compact('doctors'));
    }

public function doctorsCreate()
{
    return view('backend.layout.pms.doctors.doctorsCreate');
}
public  function doctorsList(Request $request)
        {
            Doctor::create([
        'name'=>$request->name,
            'email'=>$request->email,
            'contact'=>$request->contact,
            'gender'=>$request->gender,
            'password'=>$request->password,
                'department'=>$request->department,
                'address'=>$request->address,
                'room_no'=>$request->room_no,
                'password'=>$request->password







            ]);

            return redirect()->route('doctors');
        }

}
