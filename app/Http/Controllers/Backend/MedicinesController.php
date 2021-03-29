<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MedicinesController extends Controller
{ public function medicines()
    {
        return view('backend.layout.pms.medicines');
    }
    //
}
