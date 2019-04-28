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
    return view('layouts.app');
});

Route::get('/studentdetails', function(){
    return view('students.create');
});

Auth::routes();

Route::get('/welcome', 'HomeController@index')->name('home');

Route::resource('students', 'StudentController');


Route::get('insert','StudentController@insertform');
Route::post('create','StudentController@store'); 
Route::get('view','StudentController@index');
Route::post('update/{id}','StudentController@update');
Route::get('edit/{id}','StudentController@edit');

Route::resource('grades', 'GradeController');

Route::get('/studentsperfomance', function(){
    return view('grades.initial2');
});
Route::get('search1', 'StudentController@search1');
Route::get('insert','GradeController@insertform');
Route::post('create','GradeController@store'); 
Route::get('grades.view','GradeController@index');
Route::post('update/{id}','GradeController@update');
Route::get('edit/{id}','GradeController@edit');



Route::resource('subject', 'SubjectController');

Route::get('/subject', function(){
    return view('subject.initial');
});

Route::get('search', 'StudentController@search');
Route::get('insert','SubjectController@insertform');
Route::post('create','SubjectController@store'); 
Route::get('subject.view','SubjectController@index');
Route::post('update/{id}','SubjectController@update');
Route::get('edit/{id}','SubjectController@edit');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('admin/routes', 'HomeController@admin')->middleware('admin');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/admin', 'AdminController@index');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::resource('user', 'UserController');


Route::get('search', 'StudentController@search');
Route::get('insert','UserController@insertform');
Route::post('create','UserController@store'); 
Route::get('view','UserController@index');
Route::post('update/{id}','UserController@update');
Route::get('edit/{id}','UserController@edit');

