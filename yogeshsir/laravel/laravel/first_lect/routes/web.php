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

// Route::get('/', function () {
//     return view('welcome');
// });
// Route::get('/contact', function () {
//     return view('contact');
// });
// Route::get('/about', function () {
//     return view('about');
// });

// controller routing
Route::get('/',[UserController::class,'Index']);
Route::get('/about',[UserController::class,'About']);
Route::get('/contact',[UserController::class,'Contact']);
// Route::any('/formget',[UserController::class,'FormData']);
Route::get('/record/{name}/{email}',[UserController::class,'ParamArg']); // for pass paremeter
Route::any('/getadmin',[UserController::class,'GetAdmin']);
Route::any('/student',[UserController::class,'StudentRecord']);
Route::get('/delstudent/{id}',[UserController::class,'DeleteStudent']); // for delete record
Route::get('/editstudent/{id}',[UserController::class,'EditgetStudent']); // for Update get record
Route::post('/editstudent/{id}',[UserController::class,'EditStudent']); // for Update record
Route::any('/storeimage',[UserController::class,'ImageAdd']); // for Add image
Route::get('/logout',[UserController::class,'Logout_session']);