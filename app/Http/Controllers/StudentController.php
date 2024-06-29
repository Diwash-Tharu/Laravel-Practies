<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentController extends Controller
{
    //
    function show()
    {
        return "list of the student"    ;
    }
    function 
    add()
    {
        return "add the student";
    }
     function update()
     {
            return "update the student";
     }
     function nameadd($name){

            return "name of the student is".$name;
     }
     function getStudent(){
        $student =\App\Models\Student::all();
        return "diwash";
        //    return view('student');
     }
}
