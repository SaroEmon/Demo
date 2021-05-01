<?php

namespace App\Http\Controllers\Backend;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Models\Department;

class DepartmentsController extends Controller
{
    public function departments()
    {

        $departments=Department::all();
        $departments =Department::paginate(2);
        return view('backend.layout.pms.departments.departments',compact('departments'));
    }

    public function departmentsCreate()
    {
        return view('backend.layout.pms.departments.departmentsCreate');
    }
    public  function departmentsList(Request $request)
    {
//



//
//
//        $file_name="";
//        if ($request->hasFile('doctorImage'))
//        {
//
//            $file=$request->file('doctorImage');
//            if ($file->isValid())
//            {
//
//                $file_name=date('Ymdms').".".$file->getClientOriginalExtension();
//                $file->storeAs('doctors',$file_name);
//            }
//        }





        Department::create([
            'name'=>$request->name,
            'email'=>$request->email,
            'contact'=>$request->contact,
            'department_id'=>$request->departmentId,
            'room_no'=>$request->roomNo,
            'password'=>$request->password







        ]);

        return redirect()->route('departments');
    }
public function departmentdelete($id)
{
    $department=Department::find($id);
    $department->delete();
    return redirect()->route('departments')->with('success','Department Delete successfully');
}






//Search
//public function search(Request $request)
//{
//    $search=$request->search();
//    if ($search){
//        $doctors=Doctor::where('name','like','%','.$search.','%')
//            ->orwhere('email','like','%','.$search.','%')-> paginate(3);
//
//    }else
//    {
//        $doctors=Doctor::with('doctors');
//    }
//
//    $title="earch Result";
//    return view('backend.layout.pms.doctors',compact('title','doctors','search'));
//}


}
