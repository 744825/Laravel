<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\student_controller;
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
Route::get('/', function () {

    return view('library.class');
});
Route::get('/about', function () {
    return view('register');
});


Route::get('/student',[student_controller::class,'index']);
Route::get('/add',[add_controller::class,'index']);
Route::get('/user',[student_controller::class,'index']);


//Bookaccount routing
Route::get('/bookaccount',[BookAccount_controller::class,'index']);
Route::get('/bookaccount/create',[BookAccount_controller::class,'create']);
Route::post('/bookaccount/addBookAccount',[BookAccount_controller::class,'addBookAccount']);
Route::delete('/bookaccount/delete/',[BookAccount_controller::class,'delete']);
Route::get('/bookaccount/{BOOKS_OF_A}/edit/',[BookAccount_controller::class,'editBookAccount']);
Route::post('/bookaccount/update',[BookAccount_controller::class,'update']);




require __DIR__.'/auth.php';

