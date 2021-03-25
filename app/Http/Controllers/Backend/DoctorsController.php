<?php

namespace App\Http\Controllers\Backend;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class DoctorsController extends Controller
{
    public function doctors()
    {
        return view('backend.layout.pms.doctors');
    }
    //
}
