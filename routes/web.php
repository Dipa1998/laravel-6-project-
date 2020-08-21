<?php

use Illuminate\Support\Facades\Route;

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

Auth::routes(['verify' => true]);

Route::get('/home', 'HomeController@index')->name('home');//Dashboard Home

Auth::routes();
Route::get('/', 'QuoteController@index');//The quotes Homepage
Route::get('/jobs/{job}', 'JobController@show')->name('jobs.show');//The job Details View
Route::get('/quotes/show', 'QuoteController@show')->name('quotes.show');//The quotes Details View
Route::get('/', 'JobController@index');//The job Homepage
//profile Avatar
Route::get('/profilepicture', 'profileController@getProfileAvatar')->name('profileavatar');
Route::post('/profilepicture', 'profileController@profilePictureUpload')->name('profileavatar');
//Change Password
Route::get('/changepassword', 'profileController@changePassword')->name('changepassword');
Route::post('/changepasswordFrom', 'profileController@changePasswordFrom')->name('changepasswordFrom');
//Profile Settings
Route::get('/profile', 'profileController@profile')->name('profile');
Route::post('/profileUpdate', 'profileController@profileUpdate')->name('profileUpdate');
Route::get('/home', 'HomeController@index')->name('home');//Dashboard Home
//RESTFUL CONTROLLER
Route::resource('/dashboard','Dashboardcontroller');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');