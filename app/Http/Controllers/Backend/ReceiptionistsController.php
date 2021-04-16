<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Receiptionist;

class ReceiptionistsController extends Controller
{
    public function receiptionists()
    {
        $receiptionists = Receiptionist::all();
        $receiptionists=Receiptionist::paginate(3);
        return view('backend.layout.pms.receiptionists.receiptionists', compact('receiptionists'));
    }

    public function receiptionistsCreate()
    {
        return view('backend.layout.pms.receiptionists.receiptionistsCreate');
    }

    public function receiptionistsList(Request $request)
    {

        $file_name="";
        if ($request->hasFile('receiptionistImage'))
        {

            $file=$request->file('receiptionistImage');
            if ($file->isValid())
            {

                $file_name=date('Ymdms').".".$file->getClientOriginalExtension();
                $file->storeAs('nurses',$file_name);
            }
        }





        Receiptionist::create([
            'name' => $request->name,
            'image'=>$file_name,
            'email' => $request->email,
            'contact' => $request->contact,
            'gender' => $request->gender,
            'shift' => $request->shift,
            'department' => $request->department,
            'address' => $request->address,
            'password' => $request->password
        ]);

        return redirect()->route('receiptionists');

    }
    public function receiptionistDelete($id)
    {
        $receiptionist=Receiptionist::find($id);
        $receiptionist->delete();
        return redirect()->route('receiptionists')->with('success','Receiptionist Delete successfully');
    }
}
