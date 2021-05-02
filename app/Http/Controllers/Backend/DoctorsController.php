<?php

namespace App\Http\Controllers\Backend;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Models\Doctor;

class DoctorsController extends Controller
{
    public function doctors()
    {

        $doctors=Doctor::all();
        $doctors =Doctor::paginate(2);
        return view('backend.layout.pms.doctors.doctors',compact('doctors'));
    }

public function doctorsCreate()
{
    return view('backend.layout.pms.doctors.doctorsCreate');
}
public  function doctorsList(Request $request)
        {



            $file_name="";
            if ($request->hasFile('doctorImage'))
            {

                $file=$request->file('doctorImage');
                if ($file->isValid())
                {

                    $file_name=date('Ymdms').".".$file->getClientOriginalExtension();
                    $file->storeAs('doctors',$file_name);
                }
            }





            Doctor::create([
        'name'=>$request->name,
            'image'=>$file_name,
            'email'=>$request->email,
            'contact'=>$request->contact,
            'gender'=>$request->gender,
                'department'=>$request->department,
                'address'=>$request->address,
                'room_no'=>$request->room_no,
                'password'=>$request->password







            ]);

            return redirect()->route('doctors');
        }
        public function doctordelete($id)
        {
            $doctor=Doctor::find($id);
            $doctor->delete();
            return redirect()->route('doctors')->with('success','Doctor Delete successfully');
        }

        public function search(Request $request)
        {
            $search=$request->search();
            if ($search){
              $doctors=Doctor::where('name','like','%','.$search.','%')
                        ->orwhere('email','like','%','.$search.','%')-> paginate(3);

            }else
            {
                $doctors=Doctor::with('doctors');
            }

            $title="Search Result";
            return view('backend.layout.pms.doctors',compact('title','doctors','search'));
        }


}
