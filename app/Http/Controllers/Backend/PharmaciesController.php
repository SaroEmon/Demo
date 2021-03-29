<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PharmaciesController extends Controller
{
    public function pharmacies()
    {
        return view('backend.layout.pms.pharmacies');
    }
    //
}
