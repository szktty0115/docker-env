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

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

Auth::routes();
Route::group(['middleware' => 'auth'], function () {

    Route::get('/', function () {
        return view('welcome');
    });
});
Route::get('/home', 'HomeController@index')->name('home');

Route::group(['prefix' => 'user'], function () {
    Route::get('edit/{id}', 'UserController@getEdit')->name('user.edit');
    Route::post('edit/{id}', 'UserController@postEdit')->name('user.postEdit');
});
