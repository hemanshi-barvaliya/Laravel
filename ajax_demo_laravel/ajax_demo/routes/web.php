<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\usercontroller;

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

Route::get('/',[usercontroller::class,'Index']);
Route::post('/ajax',[usercontroller::class,'Ajax']);
Route::post('/GetUpdateData',[usercontroller::class,'GetData']);
Route::post('/update',[usercontroller::class,'update']);


