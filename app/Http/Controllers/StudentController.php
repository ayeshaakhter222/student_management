<?php

namespace App\Http\Controllers;

use App\Models\student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    
    public function index()
    {
        $students = student::paginate(10);
        return view('students.index', compact('students'));
    }

    
    public function create()
    {
        return view('students.create');
    }

    
    public function store(Request $request)
    {
         // Validate the Field
        $this->validate($request,[
            'name'=>'required',
            'batch'=>'required',
            'round'=>'required',
            'tsp'=>'required',
            'photo'=>'required',
        ]);
        $student = new Student();
        
        $student->name=$request->name;
        $student->batch=$request->batch;
        $student->round=$request->round;
        $student->tsp=$request->tsp;
        $student->photo= $request->photo;
        $student->save();
        return redirect()->route('students.index')->with('message','New Student Created Successfully !');

    }

    public function show($id)
    {
                 $student = student::find($id);
         return view('students.read',compact('student'));

    }

   
    public function edit($id)
    {
        $student = student::find($id);
        return view('students.edit',compact('student')); 
    }

   
    public function update(Request $request, $id)
    {
       // Validate the Field
        $this->validate($request,[
            'name'=>'required',
            'batch'=>'required',
            'round'=>'required',
            'tsp'=>'required',
            'photo'=>'required',
        ]);
        $student = student::find($id);
        
        $student->name=$request->name;
        $student->batch=$request->batch;
        $student->round=$request->round;
        $student->tsp=$request->tsp;
        $student->photo=$request->photo;
        $student->save();
        return redirect()->route('students.index')->with('message','Student Update successfully') ; 
    }

    
    public function destroy($id)
    {
       $student = student::find($id)->delete();
        return back()->with('message','Student Deleted Successfully !'); 
    }
}
