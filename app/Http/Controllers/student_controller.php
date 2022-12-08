<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Student;

class student_controller extends Controller {
    function index() {
        $student=Student::all();
        return view("library.class",compact('student'));
}

    function student(Request $req,Student $student){
                // Student is model name
                $student->ACADEMIC_Y=$req->ACADEMIC_Y;
                $student->CLASS_ID=$req->CLASS_ID;
                $student->COURSE_ID=$req->COURSE_ID;
                $student->CLASS=$req->CLASS;
                $student->save();
                return view("library.class");
        }




}
