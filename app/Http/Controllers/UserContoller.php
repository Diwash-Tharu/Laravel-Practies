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

    function userForm(Request $req)
    {
        // for makin the validaion of the form on the form 
        $req->validate([
            'name'=>'required | max:10',
            // 'email'=>'required ',
            'lastName'=>'required',
        ]);

         return $req;
        // return $req->input();
    
//     {
//         echo "function is called";
//         //return view('user-form');
     }
}