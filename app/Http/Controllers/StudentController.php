<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Student;
class StudentController extends Controller
{
    
    public function gettable(Request $request)
    {
        if($request->search){
            $data  = Student::where('id',$request
            ->id)->paginate(5);
            return view('table', compact('data'));

        }
        $data  = Student::paginate(5);
        return view('table', compact('data'));
        
    }
    public function edittable($id)
    {
        $data=Student::find($id);
        return view('edit',compact('data'));
    }
    public function updatetable(Request $request,$id)
    
    {
        $student=Student::find($id);
        $student->title=$request->title;
        $student->description=$request->description;
        $student->update();
        return redirect()->route('student.table');
    }
    public function deletetable(Request $request,$id)
    
    {
        $student=Student::find($id);
        $student->title=$request->title;
        $student->description=$request->description;
        $student->delete();
        return redirect()->route('student.table');
    }

        
    
}
