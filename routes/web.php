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


Route::get('student/table','StudentController@gettable')->name('student.table');

Route::get('student/table/edit/{id}','StudentController@edittable')->name('student.table.edit');
Route::put('student/table/update/{id}','StudentController@updatetable')->name('student.table.update');
Route::get('student/table/delete/{id}','StudentController@deletetable')->name('student.table.delete');

