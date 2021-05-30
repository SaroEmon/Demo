<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function adminHome()
   {
    return view('backend.welcome');
   }
   public function homeDashboard()
   {
       return view('backend.layout.pms.home.homeDashboard');
   }

}
