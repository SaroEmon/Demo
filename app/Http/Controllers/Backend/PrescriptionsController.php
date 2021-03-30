<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Prescription;
use Illuminate\Http\Request;

class PrescriptionsController extends Controller
{
    public function prescriptions()
    {
        $prescriptions=Prescription::all();
        return view('backend.layout.pms.prescriptions',compact('prescriptions'));
    }
    public function prescriptionsCreate()
    {
        return view('backend.layout.pms.prescriptionsCreate');
    }
}
