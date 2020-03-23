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

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/add-holiday', 'HolidaysController@AddHoliday'); //psl
Route::POST('/store-holiday', 'HolidaysController@storeHoliday');
Route::get('/control-holiday', 'HolidaysController@ControlHoliday');
Route::get('/edit-holiday/holiday/{holiday}', 'HolidaysController@editHoliday'); //psl
Route::POST('/edit_holiday/{holiday}', 'HolidaysController@edit_Holiday'); //uzklausa redagavimui
Route::get('/warning-holiday/{holiday}', 'HolidaysController@warningHoliday');
Route::get('/delete-holiday/{holiday}', 'HolidaysController@deleteHoliday'); //d-p yra uzklausa ne psl

Route::get('/logout', 'HomeController@atsijungti');


Auth::routes();
