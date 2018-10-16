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

Route::get('/lala', function () {
    return view('lala');
});


Route::get('/testy', function () {
    return view('testy');
});

Route::get('/tab', function () {
    return view('tab');
});


Route::get('/view', 'StudentController@view')->name('view');

Route::get('/student', 'StudentController@index')->name('student');

Route::post('/student', 'StudentController@store')->name('student.insert');

Route::post('lg/fetch', 'StudentController@fetch')->name('lg.fetch');



/*Route::get('/home', function () {
    return view('home');
});*/

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
