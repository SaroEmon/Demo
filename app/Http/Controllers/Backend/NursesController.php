<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Nurse;

class NursesController extends Controller
{
    public function nurses()
    {
        $nurses = Nurse::all();
        return view('backend.layout.pms.nurses.nurses', compact('nurses'));
    }

    public function nursesCreate()
    {
        return view('backend.layout.pms.nurses.nursesCreate');
    }

    public function nursesList(Request $request)
    {
        Nurse::create([
            'name' => $request->name,
            'email' => $request->email,
            'contact' => $request->contact,
            'gender' => $request->gender,
            'password' => $request->password,
            'department' => $request->department,
            'address' => $request->address,
            'cabin_no' => $request->cabin_no,
            'password' => $request->password
        ]);

        return redirect()->route('nurses');

    }
}
