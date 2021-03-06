<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileInformationController;
use App\Http\Controllers\TaskController;
use App\Http\Controllers\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/ 


Route::get('/',HomeController::class);

Route::resource('tasks', TaskController::class);

Route::get('/users',[UserController::class,'index']);
Route::get('/users/{user:username}',[UserController::class,'show'])->name('users.show');


// Route::get('tasks',[TaskController::class,'index']);
// Route::post('tasks',[TaskController::class,'store']);
// Route::get('tasks/{id}/edit',[TaskController::class,'edit']);
// Route::put('tasks/{id}',[TaskController::class,'update']);
// Route::delete('tasks/{id}',[TaskController::class,'destroy']);