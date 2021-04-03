<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Nurse;

class NursesController extends Controller
{
    public function nurses()
    {
        $nurses=Nurse::all();
        return view ('backend.layout.pms.nurses.nurses',compact('nurses'));
    }
    public  function nursesCreate()
    {
        return view('backend.layout.pms.nurses.nursesCreate');
    }
}
