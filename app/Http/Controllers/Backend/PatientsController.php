<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Patient;
use Illuminate\Http\Request;

class PatientsController extends Controller
{
    public function patients()
    {
        $patients=Patient::all();
        return view('backend.layout.pms.patients',compact('patients'));
    }
    public function patientsCreate()
    {
        return view('backend.layout.pms.patients');
    }
}
