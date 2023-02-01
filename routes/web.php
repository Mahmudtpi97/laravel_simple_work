<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Models\User;
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
// User Route
// Route::get('users','usersController@show');
// This is Important Route
Route::resource('users','usersController');


// Registration
Route::get('register','Auth\registerController@index')->name('register');
Route::post('registration','Auth\registerController@store');
// Route::get('show','Auth\registerController@show');
// Login
Route::get('login','Auth\loginController@index')->name('login');
Route::post('login','Auth\loginController@store')->name('login.confirm');
// Logout
Route::get('logout','Auth\logoutController@logout');
// HTTP Client Request

// File Upload Route
Route::get('file','FileUploadController@file');
Route::post('fileUpload','FileUploadController@fileUpload');

// Session Route
Route::get('sessionPut','SesCookController@sessionPut');
Route::get('sessionGet','SesCookController@sessionGet');
Route::get('sessionForget','SesCookController@sessionForget');
Route::get('sessionFlush','SesCookController@sessionFlush');

// Cookie Route
Route::get('cookieAdd','SesCookController@cookieAdd');
Route::get('cookieGet','SesCookController@cookieGet');
Route::get('cookieForget','SesCookController@cookieForget');
