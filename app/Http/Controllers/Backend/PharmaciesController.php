<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Pharmacy;

class PharmaciesController extends Controller
{
    public function pharmacies()
    {
        $pharmacies=Pharmacy::all();
        return view('backend.layout.pms.pharmacies',compact('pharmacies'));
    }
    public function pharmaciesCreate()
    {
        return view('backend.layout.pms.pharmaciesCreate');
    }
}
