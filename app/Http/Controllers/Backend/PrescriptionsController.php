<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PrescriptionsController extends Controller
{public function prescriptions()
    {
        return view('backend.layout.pms.prescriptions');
    }
    //
}
