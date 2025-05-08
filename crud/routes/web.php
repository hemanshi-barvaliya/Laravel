<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\crudcontroller;


Route::get('/',[crudcontroller::class,"Index"]);
Route::post('/Insert_Data',[crudcontroller::class,"InsertData"]);
Route::get('/delete/{id}',[crudcontroller::class,"DeleteData"]);
Route::get('/update/{id}',[crudcontroller::class,"GetSingleData"]);
Route::post('/Update_Data/{id}',[crudcontroller::class,"UpdateData"]);
