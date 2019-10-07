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

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/Register', function () {
//     return view('regist');
// });

// Route::get('/Welcome','PagesController@home');
// Route::post('/PostLogin','AuthController@postLogin');
// Route::get('/Dashboard','PagesController@dashboard');
// Route::post('/Register','UserController@store');
// Route::get('/Register','UserController@create');

// Route::get('/Welcome','PagesController@home');
Route::get('/Login','UserController@login')->name('login');
Route::get('/Logout','UserController@logout');
Route::post('/AddBarang','BarangController@store')->middleware('auth');
Route::post('/Update/{barang}','BarangController@update')->middleware('auth');
Route::get('/Delete/{barang}','BarangController@destroy')->middleware('auth');
Route::get('/Barang/{barang}','BarangController@show')->middleware('auth');
Route::get('/Dashboard','BarangController@index')->middleware('auth');
Route::post('/PostLogin','UserController@postLogin');
Route::post('/Register','UserController@store');
Route::get('/Register','UserController@create');