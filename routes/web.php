<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\student_controller;
use App\Http\Controllers\UserController;
use App\Http\Controllers\BookAccount_controller;
use App\Http\Controllers\PrincipalSubject_Controller;
use App\Http\Controllers\SectionMaster_Controller;
use App\Http\Controllers\Holiday_Controller;
use App\Http\Controllers\Department_Controller;
use App\Http\Controllers\Education_Controller;
use App\Http\Controllers\Institute_Controller;
use Illuminate\Support\Facades\DB;


require __DIR__.'/auth.php';

Route::get('/dashboard', function () {
    return view('index');
});
Route::get('/',   function () {

    return view("index");
});


Route::get('/about', function () {
    return view('welcome');
});

// Route::get('/dashboard',[controller::class,'index']);
Route::get('/student',[student_controller::class,'index']);
Route::get('/add',[add_controller::class,'index']);
Route::get('/user',[student_controller::class,'index']);


//Bookaccount routing
Route::get('/bookaccount',[BookAccount_controller::class,'index'])->middleware('auth');
Route::get('/bookaccount/create',[BookAccount_controller::class,'create'])->middleware('auth');
Route::post('/bookaccount/add',[BookAccount_controller::class,'add'])->middleware('auth');
Route::delete('/bookaccount/delete/',[BookAccount_controller::class,'delete'])->middleware('auth');
Route::get('/bookaccount/{id}/edit/',[BookAccount_controller::class,'edit'])->middleware('auth');
Route::post('/bookaccount/update',[BookAccount_controller::class,'update'])->middleware('auth');




// Show Register/Create Form
Route::get('/register',[UserController::class, 'create'])->middleware('guest' );
// Create New User
Route::post('/users', [UserController::class, 'store']);
// Log User Out
Route::post('/logout', [UserController::class, 'logout'])->middleware('auth');
// Show Login Form
Route::get('/login', [UserController::class, 'login'])->name('login')->middleware('guest');
// Log In User
Route::post('/users/authenticate', [UserController::class, 'authenticate']);


//principal subject routing
Route::get('/principalsubject',[PrincipalSubject_Controller::class,'index'])->middleware('auth');
Route::get('/principalsubject/create',[PrincipalSubject_Controller::class,'create'])->middleware('auth');
Route::post('/principalsubject/add',[PrincipalSubject_Controller::class,'add'])->middleware('auth');
Route::delete('/principalsubject/delete/',[PrincipalSubject_Controller::class,'delete'])->middleware('auth');
Route::get('/principalsubject/{id}/edit/',[PrincipalSubject_Controller::class,'edit'])->middleware('auth');
Route::post('/principalsubject/update',[PrincipalSubject_Controller::class,'update'])->middleware('auth');


//section routing
Route::get('/section-mstr',[SectionMaster_Controller::class,'index'])->middleware('auth');
Route::get('/section-mstr/create',[SectionMaster_Controller::class,'create'])->middleware('auth');
Route::post('/section-mstr/add',[SectionMaster_Controller::class,'add'])->middleware('auth');
Route::delete('/section-mstr/delete/',[SectionMaster_Controller::class,'delete'])->middleware('auth');
Route::get('/section-mstr/{id}/edit/',[SectionMaster_Controller::class,'edit'])->middleware('auth');
Route::post('/section-mstr/update',[SectionMaster_Controller::class,'update'])->middleware('auth');

//Holiday routing
Route::get('/holiday',[Holiday_Controller::class,'index'])->middleware('auth');
Route::get('/holiday/create',[Holiday_Controller::class,'create'])->middleware('auth');
Route::post('/holiday/add',[Holiday_Controller::class,'add'])->middleware('auth');
Route::delete('/holiday/delete/',[Holiday_Controller::class,'delete'])->middleware('auth');
Route::get('/holiday/{id}/edit/',[Holiday_Controller::class,'edit'])->middleware('auth');
Route::post('/holiday/update',[Holiday_Controller::class,'update'])->middleware('auth');

//department routing
Route::get('/department',[Department_Controller::class,'index'])->middleware('auth');
Route::get('/department/create',[Department_Controller::class,'create'])->middleware('auth');
Route::post('/department/add',[Department_Controller::class,'add'])->middleware('auth');
Route::delete('/department/delete/',[Department_Controller::class,'delete'])->middleware('auth');
Route::get('/department/{id}/edit/',[Department_Controller::class,'edit'])->middleware('auth');
Route::post('/department/update',[Department_Controller::class,'update'])->middleware('auth');


//equcation routing
Route::get('/education',[Education_Controller::class,'index'])->middleware('auth');
Route::get('/education/create',[Education_Controller::class,'create'])->middleware('auth');
Route::post('/education/add',[Education_Controller::class,'add'])->middleware('auth');
Route::delete('/education/delete/',[Education_Controller::class,'delete'])->middleware('auth');
Route::get('/education/{id}/edit/',[Education_Controller::class,'edit'])->middleware('auth');
Route::post('/education/update',[Education_Controller::class,'update'])->middleware('auth');

//institute routing
Route::get('/institute',[Institute_Controller::class,'index'])->middleware('auth');
Route::get('/institute/create',[Institute_Controller::class,'create'])->middleware('auth');
Route::post('/institute/add',[Institute_Controller::class,'add'])->middleware('auth');
Route::delete('/institute/delete/',[Institute_Controller::class,'delete'])->middleware('auth');
Route::get('/institute/{id}/edit/',[Institute_Controller::class,'edit'])->middleware('auth');
Route::post('/institute/update',[Institute_Controller::class,'update'])->middleware('auth');
