<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserContoller extends Controller
{
    //
    function getUser()
    {
        //return "code from the databse";
        return view ('user');
    }

    function diwash()
    {
        return "diwash";
    }

    function getName($name)
    {
        return view('getuser',['name'=>$name]);
       // return $name;
    }  
    
    function adminLogin()
    {
        return view('admin.login');
    }
}
