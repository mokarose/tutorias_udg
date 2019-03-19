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

//Home Routes
Route::get('/','HomeController@index')->name("home");
Route::get('/home', 'HomeController@index');

Route::get('/home_admin', ['uses' => 'RootController@index'])->name('home_admin')->middleware('verified');
Route::get('/home_student', ['uses' => 'StudentController@index'])->name('home_student')->middleware('verified');
Route::get('/home_tutor', ['uses' => 'TutorController@index'])->name('home_tutor')->middleware('verified');



//Convocatory
Route::get('/convocatory', ['uses' => 'ConvocatoryController@create'])->name('convocatory.create')->middleware('verified');
Route::post('/convocatory', ['uses' => 'ConvocatoryController@store'])->name('convocatory.create')->middleware('verified');


Auth::routes(['verify' => true]);

/*
// Authentication Routes...
Route::get('login', 'Auth\LoginController@showLoginForm')->name('login');
Route::post('login', 'Auth\LoginController@login');
Route::post('logout', 'Auth\LoginController@logout')->name('logout');

// Registration Routes...
Route::get('register', 'Auth\RegisterController@showRegistrationForm')->name('register');
Route::get('register_tutor',['uses' => 'Auth\RegisterController@showRegistrationTutorForm'])->name('register_tutor');
Route::post('register', 'Auth\RegisterController@register');


// Password Reset Routes...
Route::get('password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('password.request');
Route::post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name('password.email');
Route::get('password/reset/{token}', 'Auth\ResetPasswordController@showResetForm')->name('password.reset');
Route::post('password/reset', 'Auth\ResetPasswordController@reset')->name('password.update');

// Email Verification Routes...
Route::get('email/verify', 'Auth\VerificationController@show')->name('verification.notice');
Route::get('email/verify/{id}', 'Auth\VerificationController@verify')->name('verification.verify');
Route::get('email/resend', 'Auth\VerificationController@resend')->name('verification.resend');
*/

