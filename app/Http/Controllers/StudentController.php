<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\student;

class StudentController extends Controller
{
    public function index()
    {
        $students = student::all();
        return view('student_reg', compact('students'));
    }
    public function store(Request $request)
    {
        //dd($request->all());
        student::create($request->all()); 
        return redirect()->route('home')->with('success', 'Student added successfully');
    }
}


