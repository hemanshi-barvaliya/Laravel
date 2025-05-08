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

Route::get('welcome', function () {
    return view('welcome');
});


route::any('welcome',[UserController::class, 'Insert']);
route::any('/logout',[UserController::class, 'Logout']);
route::get('/delete/{id}',[UserController::class, 'delete']);
route::get('/update/{id}',[UserController::class, 'update']);
route::post('/update/{id}',[UserController::class, 'updaterecord']);

