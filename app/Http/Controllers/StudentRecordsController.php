<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentRecordsController extends Controller
{
    public function index()
    {
        return view('navigation.stud_records');
    }
}
