<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Models\Admin;

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




Route::post('/submit-form', [UserController::class, 'formdata']);
Route::any('/getadmin', [UserController::class, 'GetAdmin']);

Route::get('/delete/{id}', [UserController::class, 'delete']);
Route::get('/update/{id}', [UserController::class, 'update']);
Route::post('/update/{id}', [UserController::class, 'updatedrecord']);
Route::get('/imgdelete/{id}', [UserController::class, 'imgdelete']);
Route::get('/logout', [UserController::class, 'logoutpage']);

Route::any('/storeimage', [UserController::class, 'ImageAdd']);
Route::get('/updateimage/{id}', [UserController::class, 'updateimage']); // View the update form
Route::post('/updateimage/{id}', [UserController::class, 'updateimg']);   // Handle the form submission







