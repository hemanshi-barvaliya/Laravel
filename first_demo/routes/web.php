<?php

namespace App\Http\Controllers;
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
Route::get('formdata.blade.php', function () {
    return view('formdata');
});


Route::any('form.blade.php', [UserController::class, 'FormData']);
Route::any('/getadmin', [UserController::class, 'GetAdmin']);
Route::get('/delete/{id}', [UserController::class, 'delete']);
Route::get('/imgdelete/{id}', [UserController::class, 'imgdelete']);
Route::any('/updateimage/{id}', [UserController::class, 'updateimage']);
Route::post('/updateimage/{id}', [UserController::class, 'updateimg']);
Route::get('/update/{id}', [UserController::class, 'update']);
// Route::get('/update/{id}', [UserController::class, 'update']);
Route::post('/update/{id}', [UserController::class, 'updatedrecord']);
Route::get('/logout', [UserController::class, 'logoutpage']);
Route::any('/storeimage', [UserController::class, 'ImageAdd']);










