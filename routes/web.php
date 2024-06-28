<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserContoller;

Route::get('/', function () {
    return view('welcome');
});

// Route::get('/homes', function () {
//     return view('hoem');
// });

// for calling the cotoller in the laravel
Route ::get('user',[userContoller::class,'getUser']);

Route ::get('diwash',[userContoller::class,'diwash']);


// Route  for getting the name 
Route::get('/user/{name}',[userContoller::class,'getName']);

// Route for the admin login
Route::get('/admin',[userContoller::class,'adminLogin']);

Route::redirect('/hom', '/');

Route::view('/homes', 'hoem');


Route::get('/about/{name}', function ($name) {
    echo $name;
    return view('about');
});	    

// at first it will show than then the submit button is pressed thant 
//tha form will be shown as shown in the figure of the code 

Route::view('/userform', 'user-form');
Route ::Post('adduser',[userContoller::class,'userForm']);