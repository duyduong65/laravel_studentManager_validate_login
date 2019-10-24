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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::prefix("students")->group(function () {
    Route::get('list-student', 'StudentController@index')->name('students.index');
    Route::get('delete/{id}', 'StudentController@destroy')->name('students.delete');
    Route::get('create','StudentController@showFormCreate')->name('students.create');
    Route::post('create','StudentController@create')->name('students.create');
    Route::get('edit/{id}','StudentController@formEdit')->name('students.edit');
    Route::post('edit/{id}','StudentController@edit')->name('students.edit');
});




