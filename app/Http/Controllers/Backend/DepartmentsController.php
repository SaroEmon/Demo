<?php

namespace App\Http\Controllers\Backend;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Models\Department;

class DepartmentsController extends Controller
{
    public function departments()
    {

        $departments = Department::all();
        $departments = Department::paginate(2);
        return view('backend.layout.pms.departments.departments', compact('departments'));
    }

    public function departmentsCreate()
    {
        return view('backend.layout.pms.departments.departmentsCreate');
    }

    public function departmentsList(Request $request)
    {


        Department::create([
            'name' => $request->name,
            'email' => $request->email,
            'contact' => $request->contact,
            'room_no' => $request->roomNo,
            'password' => $request->password


        ]);

        return redirect()->route('departments');
    }

    public function departmentdelete($id)
    {
        $department = Department::find($id);
        $department->delete();
        return redirect()->route('departments')->with('success', 'Department Delete successfully');
    }


    //UPDATE

    public function departmentEdit($id)
    {
        $departments= Department::find($id);
        return view ('backend.layout.pms.departments.departmentsEdit', compact('departments'));
    }

    public function departmentUpdate(Request $request,$id)
    {
        Department::find($id)->update([
            'name' => $request->name,
            'email' => $request->email,
            'contact' => $request->contact,
            'room_no' => $request->doctorId,
            'password' => $request->password,

        ]);
        return redirect()->route('departments')->with('success', 'Department Updated successfully');
    }



}
