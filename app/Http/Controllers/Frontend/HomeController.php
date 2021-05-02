<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Backend\DepartmentsController;
use App\Http\Controllers\Controller;
use App\Models\Department;
use App\Models\Doctor;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home()
    {
    $doctors=Doctor::all();
    $departments=Department::all();


        return view('frontend.welcome',compact('doctors','departments'));

    }


}
