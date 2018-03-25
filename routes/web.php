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

Route::get('/student', 'StudentController@index')->name('student.index');
//Route::resource('/student','StudentController',['except'=>['destroy',]]);
//Route::resource('/lecturer', 'LecutrerController',['except'=>['destroy',]]);
//Route::resource('/club','ClubController',['except'=>['destroy',]]);
