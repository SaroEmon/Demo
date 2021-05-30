<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Prescription;
use Illuminate\Http\Request;

class ReportController extends Controller
{
    public function reportPrescription()
    {
        $report=[];
        $fromDate=null;
        $toDate=null;




        if(isset($_GET['from_date']) && isset($_GET['to_date']) )
        {
            $fromDate=date('Y-m-d',strtotime($_GET['from_date']));
            $toDate=date('Y-m-d',strtotime($_GET['to_date']));


            $report=Prescription::   orderby('created_at','desc')->whereBetween('created_at',[$fromDate,$toDate])->get();
//            dd($allBooking);
        }

        return view('backend.layout.pms.report.reportPrescription',compact('report','fromDate','toDate'));

    }

}
