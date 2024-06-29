<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserContoller;
use App\Http\Controllers\StudentController;
// direct use of the middleware 
use App\Http\Middleware\AgeCheck;

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

// for making the link like diwash 

Route::view('/diwash/{name}','diwash');


// named Routes of the php
Route::view('diwash/tharu/butwal','nameRoute')->name('tharu');
Route::view('diwash/tharu/butwal{name}','nameRoute')->name('anu');

Route::get('show',[userContoller::class,'showName']);

Route::get('anu',[userContoller::class,'showAnu']);

// for the prefix of the code 

// Route::view('student/home', 'hoem');
// Route::get('student/shows', [userContoller::class,'shows']);
// Route::get('student/add', [userContoller::class,'add']);

Route::prefix('student')->group(function(){
    Route::view('/home', 'hoem');
    Route::get('/shows', [userContoller::class,'shows']);
    Route::get('/add', [userContoller::class,'add']);
});


// Route Group 
// Route::get('show',[StudentController::class,'show']);
// Route::get('add',[StudentController::class,'add']);
// Route ::get('update',[StudentController::class,'update']);
// Route::get('/data/{name}',[StudentController::class,'nameadd']);

// Route::contoller(StudentController::class)->group(function()
// {
//     Route::get('shows','show');
//     Route::get('add','add');
//     Route::get('update','update');
// });
// resources/views/milldle-ware-checkGroup.blade.php


// grouing of middleware for

// Route ::view('middle-wares','milldle-ware-checkGroup')->middleware('check1');

// for the group middleware of the code 
Route ::middleware(['check1'])->group(function()
{
    Route::view('middle-wares','milldle-ware-checkGroup');
    
    // wirte the own middleware for the group
    // Route::view('middle-wares','milldle-ware-checkGroup');
    // Route::view('middle-wares','milldle-ware-checkGroup');

});

// for the individual middleware of the code
Route::view('middle-wares-two','milldle-ware-checkGroup')->middleware(AgeCheck::class);



// now connecting the data base 

Route::get('index', [userContoller::class,'index']);