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


Route::post('', function () {
    return view('home');
});
Route::get('/rendezvous','PatientController@rendezvous');

Auth::routes();

Route::post('/addrv','PatientController@addrv');

Route::get('/addrv','PatientController@addrv');

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/', 'HomeController@index')->name('home');
