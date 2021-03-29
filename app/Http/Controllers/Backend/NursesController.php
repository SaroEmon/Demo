<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class NursesController extends Controller
{
    public function nurses()
    {
        return view ('backend.layout.pms.nurses');
    }
    //
}
