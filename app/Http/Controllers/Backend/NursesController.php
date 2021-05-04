<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Nurse;

class NursesController extends Controller
{
    public function nurses()
    {
        $nurses = Nurse::all();
        $nurses=Nurse::paginate(3);
        return view('backend.layout.pms.nurses.nurses', compact('nurses'));
    }

    public function nursesCreate()
    {
        return view('backend.layout.pms.nurses.nursesCreate');
    }

    public function nursesList(Request $request)
    {

        $file_name="";
        if ($request->hasFile('nurseImage'))
        {

            $file=$request->file('nurseImage');
            if ($file->isValid())
            {

                $file_name=date('Ymdms').".".$file->getClientOriginalExtension();
                $file->storeAs('nurses',$file_name);
            }
        }





        Nurse::create([
            'name' => $request->name,
            'image'=>$file_name,
            'email' => $request->email,
            'contact' => $request->contact,
            'gender' => $request->gender,
            'department' => $request->department,
            'address' => $request->address,
            'word_no' => $request->word_no,
            'password' => $request->password
        ]);

         return redirect()->route('nurses');

    }
    public function nurseDelete($id)
    {
        $nurse=Nurse::find($id);
        $nurse->delete();
        return redirect()->route('nurses')->with('success','Nurse Delete successfully');
    }



    public function nurseEdit($id)
    {
        $nurses= Nurse::find($id);
        return view ('backend.layout.pms.nurses.nursesEdit', compact('nurses'));
    }

    public function nurseUpdate(Request $request,$id)
    {
       Nurse::find($id)->update([
            'name' => $request->name,
            'email' => $request->email,
            'contact' => $request->contact,
            'gender' => $request->gender,
            'department' => $request->department,
            'address' => $request->address,
            'word_no' => $request->word_no,
            'password' => $request->password,

        ]);
        return redirect()->route('nurses')->with('success', 'Nurses Updated successfully');
    }
}
