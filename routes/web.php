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

Route::get('forum', 'PostControler@index')->name('allForum');
Route::get('post', 'PostControler@create')->name('forum');
Route::post('post.store','PostControler@store');


Route::get('upload','FileController@create');
Route::post('file.create','FileController@store');
Route::get('file.download/{id}','FileController@download');
Route::get('file.destroy/{id}','FileController@destroy');
Route::get('file.edit/{id}','FileController@edit');
Route::post('file.update','FileController@update');


Auth::routes();


Route::get('user','HomeController@profile')->name('user.profile');
Route::get('contactus','HomeController@contact')->name('contact');
Route::get('/', 'HomeController@index')->name('home');
Route::post('profile.update','HomeController@updateProfileImage');
Route::get('user/password','HomeController@updatepassword')->name('user.password');
Route::post('profile.update','HomeController@updateuserpass')->name('password.update');
