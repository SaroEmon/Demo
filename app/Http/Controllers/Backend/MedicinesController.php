<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Medicine;

class MedicinesController extends Controller
{ public function medicines()
    {
        $medicines=Medicine::all();
        return view('backend.layout.pms.medicines',compact('medicines'));
    }
    public function medicinesCreate()
    {
        return view('backend.layout.pms.medicinesCreate');
    }
}



