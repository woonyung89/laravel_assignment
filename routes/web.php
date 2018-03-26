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

//Route::get('/student', 'StudentController@index')->name('student.index');
Route::resource('/student','StudentController',['except'=>['destroy',]]);
Route::resource('/lecturer', 'LecturerController',['except'=>['destroy',]]);
Route::resource('/club','ClubController',['except'=>['destroy',]]);

Route::get('/student/join/{id}', 'StudentController@join')->name('student.join');
Route::post('/student/join/{id}', 'StudentController@updateJoin')->name('student.updateJoin');


Route::get('/lecturer/join/{id}', 'LecturerController@join')->name('lecturer.join');

// Route::get('login', 'Auth\LoginController@showLoginForm')->name('login');
// Route::post('login', 'Auth\LoginController@login');
// Route::post('logout', 'Auth\LoginController@logout')->name('logout');



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
