<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    function index(){
        return Student::all();
    }

    public function show($id)
    {
        $student = Student::find($id);
        return view('student.show', ['student' => $student]);
    }

    public function update(Request $request, $id)
    {  
    $student = Student::find($id);
    $student->id = $request->id;
    $student->name = $request->name;
    $student->inproved = $request->inproved;
    $student->date = $request->date;
    $student->time = $request->time;
  
    $student->save();
    return $student;
    }

    public function destroy($id)
    {
        $student = Student::find($id);
        $student->delete();
    }
}
