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
Route::get('{provider}/auth',[
    'uses'  =>  'SocailController@auth',
    'as'    =>  'social.auth'
]);

Route::get('{provider}/redirect',[
    'uses'  =>  'SocailController@auth_callback',
    'as'    =>  'social.callback'
]);