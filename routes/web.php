<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\student_controller;
use App\Http\Controllers\UserController;
use App\Http\Controllers\BookAccount_controller;
use App\Http\Controllers\PrincipalSubject_Controller;
use App\Http\Controllers\SectionMaster_Controller;

use Illuminate\Support\Facades\DB;
/*
A@shu_28
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
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



Route::get('/section-mstr',[SectionMaster_Controller::class,'index'])->middleware('auth');
Route::get('/section-mstr/create',[SectionMaster_Controller::class,'create'])->middleware('auth');
Route::post('/section-mstr/add',[SectionMaster_Controller::class,'add'])->middleware('auth');
Route::delete('/section-mstr/delete/',[SectionMaster_Controller::class,'delete'])->middleware('auth');
Route::get('/section-mstr/{id}/edit/',[SectionMaster_Controller::class,'edit'])->middleware('auth');
Route::post('/section-mstr/update',[SectionMaster_Controller::class,'update'])->middleware('auth');


