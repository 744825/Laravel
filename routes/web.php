<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\student_controller;
use App\Http\Controllers\UserController;
use App\Http\Controllers\BookAccount_controller;
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
Route::post('/bookaccount/addBookAccount',[BookAccount_controller::class,'addBookAccount'])->middleware('auth');
Route::delete('/bookaccount/delete/',[BookAccount_controller::class,'delete'])->middleware('auth');
Route::get('/bookaccount/{BOOKS_OF_A}/edit/',[BookAccount_controller::class,'editBookAccount'])->middleware('auth');
Route::post('/bookaccount/update',[BookAccount_controller::class,'update'])->middleware('auth');


// Show Register/Create Form
Route::get('/register',[UserController::class, 'create'])->middleware('guest' );


//

// Create New User
Route::post('/users', [UserController::class, 'store']);

// Log User Out
Route::post('/logout', [UserController::class, 'logout'])->middleware('auth');

// Show Login Form
Route::get('/login', [UserController::class, 'login'])->name('login')->middleware('guest');

// Log In User
Route::post('/users/authenticate', [UserController::class, 'authenticate']);


require __DIR__.'/auth.php';

