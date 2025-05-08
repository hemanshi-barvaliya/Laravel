<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

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



Route::any('/',[UserController::class,"index"]);

Route::post('/Insert_Data',[UserController::class,"InsertData"]);
Route::get('/delete/{id}',[UserController::class,"Deletedata"]);
Route::get('/update/{id}',[UserController::class,"Getsingledata"]);
Route::get('/update/{id}',[UserController::class,"GetSingleData"]);
Route::post('/Update_Data/{id}',[UserController::class,"UpdateData"]);
