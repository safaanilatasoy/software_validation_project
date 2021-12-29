<?php

use App\Http\Controllers\BookController;
use Illuminate\Support\Facades\Route;



#Route::get('/',"BookController@index"); 
#Route::get('/edit/{id}',"BookController@edit"); 
#Route::get('/show/{id}',"BookController@show"); 
#Route::get('/create',"BookController@create"); 
#Route::post('/store',"BookController@store"); 
#Route::post('/update/{id}',"BookController@update"); 

Route::get('/', [BookController::class, 'index']);
Route::get('/edit/{id}', [BookController::class, 'edit']);
Route::get('/show/{id}', [BookController::class, 'show']);
Route::get('/create', [BookController::class, 'create']);
Route::post('/store', [BookController::class, 'store']);
Route::post('/update/{id}', [BookController::class, 'update']);
Route::post('/delete/{id}"', [BookController::class, 'delete']);






Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
