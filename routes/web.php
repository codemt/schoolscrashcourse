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

// get all schools
Route::get('/schools/all','SchoolController@getSchools')->name('allschools');


// edit school
Route::get('/schools/edit/{id}','SchoolController@editSchools')->name('editSchools');
Route::post('/schools/update','SchoolController@updateSchools')->name('updateSchools');

