<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TaskController;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('task-list',[TaskController::class,'index']);
Route::get('complete-task',[TaskController::class,'completeTask']);
Route::get('pending-task',[TaskController::class,'pendingTask']);
Route::get('add-task',[TaskController::class,'addTask']);
Route::post('save-task',[TaskController::class,'saveTask']);
Route::get('delete-task/{id}',[TaskController::class,'deleteTask']);



