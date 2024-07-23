<?php

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

Route::get('/mohan', function(){
    echo"Hello Mohan Khulal";
})->name('login');

Route::get('/khulal', function(){
    echo "Hello Mohan Khulal, how are you";
})->name ('loginout');

Route::get('/table','Mohancontroller@table')->name ('loginout');

