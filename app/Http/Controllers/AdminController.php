<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\doctor;

class AdminController extends Controller
{
    public function addview()
    {
        return view('admin.immo');
    }

    public function upload(Request $request)
    {
        $doctor = new doctor;
        $image = $request->file;
        $imagename = time() . '.' . $image->getClientOriginalExtension();

        $request->file->move('doctorimage', $imagename);
        $doctor->file = $imagename;
        $doctor->name = $request->name;
        $doctor->speciality = $request->speciality;
        $doctor->Telephone = $request->Telephone;
        $doctor->file = $request->file;

        $doctor->save();

        return redirect()->back();
    }
}
