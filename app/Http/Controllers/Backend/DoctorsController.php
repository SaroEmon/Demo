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
        return view('backend.layout.pms.doctors',compact('doctors'));
    }
    
public function doctorsCreate()
{
    return view('backend.layout.pms.doctorsCreate');
}


}
