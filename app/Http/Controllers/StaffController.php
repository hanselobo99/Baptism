<?php

namespace App\Http\Controllers;

use App\Models\BaptismDetail;
use App\Models\BaptismRecord;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class StaffController extends Controller
{
    public function baptismCreate()
    {
        return view('Staff.BaptismCreate');
    }

    public function insertData(Request $request)
    {
        $record = BaptismRecord::create([
            'Rno' => $request->Rno,
            'FirstName' => $request->name,
            'MiddleName' => $request->Mname,
            'LastName' => $request->surname,
            'DateOfBirth' => $request->DateOfBirth
        ]);
        $details = new BaptismDetail([
            'FathersName' => $request->FatherName,
            'MothersName' => $request->MotherName,
            'FathersResidence' => $request->FatherResidence,
            'Nationality' => $request->Nationality,
            'PlaceOfBirth' => $request->PlaceOfBirth,
            'DateOfBaptism' => $request->DateOfBaptism,
            'GodFathersName' => $request->GodFatherName,
            'GodFathersRes' => $request->GodFatherRes,
            'GodMothersName' => $request->GodMotherName,
            'GodMothersRes' => $request->GodMotherRes,
            'MinisterOfBaptism' => $request->MinisterOfBaptism,
            'PlaceOfBaptism' => $request->PlaceOfBaptism,
            'DateOfConfirmation' => $request->Confirmation,
            'DateOfMarriage' => $request->DateOfMarriage,
            'Remarks'=>$request->Remarks
        ]);

        $record->baptismDetail()->save($details);
        return to_route('home');

    }

    public function displayDetails(){
        $records = BaptismRecord::all();
        return view('Staff.DisplayDetails',compact('records'));
    }
}
