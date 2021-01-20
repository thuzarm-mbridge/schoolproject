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



Route::resource('school','SchoolController');

Route::resource('student','StudentController');

Route::resource('/','FrontendController');

Route::group(['middleware'=>'visitor'],function(){

Route::get('/register','RegisterController@register')->name('register');

Route::post('/registerUser','RegisterController@registerUser')->name('registerUser');

Route::get('/login','LoginController@login');

Route::get('auth/social', 'LoginController@show')->name('social.login');
Route::get('oauth/{driver}', 'LoginController@redirectToProvider')->name('social.oauth');
Route::get('oauth/{driver}/callback', 'LoginController@handleProviderCallback')->name('social.callback');

Route::post('/postLogin','LoginController@postLogin')->name('postLogin');

});

Route::get('/logout','LoginController@logout');


// test login


















