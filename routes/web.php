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

Route::view('/', 'pages.welcome');


Auth::routes();
Route::view('/login', 'pages.login') ->name('login');
Route::view('/profile', 'pages.profile') ->name('profile');
Route::get('/home', 'HomeController@index')->name('home');
Route::view('/navigation', 'components.navlogin');

//tester route (create and store)
Route::get('/tester', 'Tester@create')->name('tester.create');
Route::post('/tester', 'Tester@store')->name('tester.store');
