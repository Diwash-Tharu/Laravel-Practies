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
            'email'=>'required ',
            'lastName'=>'required | UpperCase',
        ],
        [
            'name.required'=>'Name is required',
            'name.max'=>'Name should be less than 10 characters',
            'lastName.required'=>'Last Name is required',
            
        ]
    );

         return $req;
        // return $req->input();
    
//     {
//         echo "function is called";
//         //return view('user-form');


     }
    function showName()
    {
        // return redirect()->route('tharu');
        return to_route('tharu');
    }

    function showAnu()
    {
        return to_route('anu',['name' => 'diwash']);
    }

    // for grup prefix 
    function shows() {
        return "diwahs show";
    }

    function add()  
    {
        return "diwash add";
        // return view('add');
    }

}