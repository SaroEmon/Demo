<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Doctor;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home()
    {
    $doctors=Doctor::all();
        return view('frontend.welcome',compact('doctors'));

    }


}
