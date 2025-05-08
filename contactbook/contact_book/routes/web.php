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

Route::get('/', function () {
    return view('welcome');
});

Route::any('/getadmin', [UserController::class, 'GetAdmin']);
Route::get('/delete/{id}', [UserController::class, 'delete']);
Route::get('/update/{id}', [UserController::class, 'update']);
Route::post('/update/{id}', [UserController::class, 'updaterecord']);
Route::any('/updatedata/{id}', [UserController::class, 'updatedata']);



