<?php

namespace App\Http\Controllers;

use App\Models\BaptismRecord;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function viewDetails($id){
        $record = BaptismRecord::with('baptismDetail')->findOrFail($id);
        return view('Admin.viewDetail',compact('record'));
    }
}
