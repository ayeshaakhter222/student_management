<?php

namespace App\Http\Controllers;

use App\Models\student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class StudentController extends Controller
{
    public function __construct()
    {
        
    }

    
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
         
        $info=[
            'name'=>'required',
            'batch'=>'required',
            'round'=>'required',
            'tsp'=>'required',
            'photo'=>'required|mimes:jpg,bmp,png',
        ];
            // Validate the Field
            $validator = Validator::make($request->all(), $info);

        //  dd($request->all());

        if ($validator->fails()) {
            return redirect()->back()
                ->withInput()
                ->withErrors($validator);
        } else {
            $info = $request->all();

           

            // Save Image
            $fileName = time() . '.' . $request->file('photo')->extension();
            $file = $request->file('photo')->move(public_path('uploads/image'), $fileName);
            $filepath = 'uploads/image/' . $fileName;
            $info['photo'] = $filepath;

            $stdinfo = student::create($info);


       
         return redirect()->route('students.index')->with('message','New Student Created Successfully !');

        }
    }

    public function show($id)
    {
                 $student = student::find($id);
         return view('students.read',compact('student'));

    }

   
    public function edit($id)
     {
        //  $student =student::with(['photo'])->find($id);
          $student = student::find($id);
        return view('students.edit',compact('student')); 
    }

   
    public function update(Request $request, $id)
    {
        $upstd= student::find($id);
        $info = $request->all();
         // Save  Image
        if ($request->hasFile('photo')) {
            $fileName = time() . '.' . $request->file('photo')->extension();
            $file = $request->file('photo')->move(public_path('uploads/image'), $fileName);
            // dd(file('photo'));
            $filepath = 'uploads/image/' . $fileName;
            $info['photo'] = $filepath;
        } else {
            $info['photo'] = $upstd->photo;
        }

         $upstd->update($info);
       
       
        return redirect()->route('students.index')->with('message','Student Update successfully') ; 
    }

    
    public function destroy($id)
    {
       $student = student::find($id)->delete();
       
        return back()->with('message','Student Deleted Successfully !'); 
    }
}
