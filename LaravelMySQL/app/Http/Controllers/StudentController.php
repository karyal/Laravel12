<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;

class StudentController extends Controller {
    //
    function save(Request $request){
        $student = new Student();
        //return 'hello from save() of StudentController';
        $student->fullname=$request->txtName;
        $student->course=$request->txtCourse;
        $student->courseyear=$request->txtYear;
        $student->section=$request->txtSection;
        $student->save();
        if($student){
            echo 'Student save successfully';
        }
        else{
            echo 'Error to save record';
        }        
    }
    function students(){
        //$students=Student::all();
        $students=Student::paginate(15);
        return view('students', ['students'=>$students]);
    }
    function delete($id){
        $isDeleted = Student::destroy($id);
        if($isDeleted){
            return redirect('students');
        }
        //return view('students', ['students'=>$students]);
    }

    function deleteMultiple(Request $request){
        $result = Student::destroy($request->ids);
        if($result){
            return redirect('students');
        }
        else{
            return "Error to delete record";
        }
    }

    function edit($id){        
        $student = Student::find($id);
        return view('editstudent', ['student'=>$student]);
    }

    function update(Request $request, $id){
        $student = Student::find($id);
        $student->fullname=$request->txtName;
        $student->course=$request->txtCourse;
        $student->courseyear=$request->txtYear;
        $student->section=$request->txtSection;
        if($student->save()){
            return redirect('students');
        }        
    }

    function search(Request $request){
        $searchText = $request->txtSearch;
        $result = Student::where('fullname', 'like', "%$searchText%")->paginate(15);
        //$students = $result->paginate(15)->append($result->query());
        return view('students', ['students'=>$result, 'search'=>$searchText]);
        /*
        $student->fullname=$request->txtName;
        $student->course=$request->txtCourse;
        $student->courseyear=$request->txtYear;
        $student->section=$request->txtSection;
        if($student->save()){
            return redirect('students');
        } 
        */       
    }
}