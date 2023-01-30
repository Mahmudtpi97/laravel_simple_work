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