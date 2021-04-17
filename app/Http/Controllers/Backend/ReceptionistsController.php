<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Receptionist;

class ReceptionistsController extends Controller
{
    public function receptionists()
    {
        $receptionists = Receptionist::all();
        $receptionists=Receptionist::paginate(3);
        return view('backend.layout.pms.receptionists.receptionists', compact('receptionists'));
    }

    public function receptionistsCreate()
    {
        return view('backend.layout.pms.receptionists.receptionistsCreate');
    }

    public function receptionistsList(Request $request)
    {

        $file_name="";
        if ($request->hasFile('receptionistImage'))
        {

            $file=$request->file('receptionistImage');
            if ($file->isValid())
            {

                $file_name=date('Ymdms').".".$file->getClientOriginalExtension();
                $file->storeAs('receptionist',$file_name);
            }
        }





        Receptionist::create([
            'name' => $request->name,
            'image'=>$file_name,
            'email' => $request->email,
            'contact' => $request->contact,
            'gender' => $request->gender,
            'shift' => $request->shift,
            'address' => $request->address,
            'password' => $request->password
        ]);

        return redirect()->route('receptionists');

    }
    public function receptionistDelete($id)
    {
        $receptionist=Receptionist::find($id);
        $receptionist->delete();
        return redirect()->route('receptionists')->with('success','Receptionist Delete successfully');
    }
}
