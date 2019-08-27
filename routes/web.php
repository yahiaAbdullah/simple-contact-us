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

Route::get("contact", 'Frontend\MessageController@create')->name('frontend.messages.create');
Route::post("contact", 'Frontend\MessageController@store')->name('frontend.messages.store');

Route::get('admin/messages', 'Admin\MessageCotnroller@index')->name('admin.messages.index');
Route::get('admin/messages/{message}', 'Admin\MessageCotnroller@show')->name('admin.messages.show');
