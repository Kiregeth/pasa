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

Route::get('/', 'home_controller@index');
Route::get('/home', 'HomeController@index');

Route::get('add_carousel', 'home_controller@add_carousel');
//Route::get('/{pasainternational}/edit_carousel', 'home_controller@edit_carousel');
Route::get('/{pasainternational}/delete_carousel', 'home_controller@delete_carousel');

Auth::routes();


Route::get('/pasa_admin/home','AdminController@index');
Route::get('/pasa_admin','pasa_admin\LoginController@showLoginForm')->name('pasa_admin.login');
Route::post('/pasa_admin','pasa_admin\LoginController@login');
Route::post('/pasa_admin-password/email','pasa_admin\ForgotPasswordController@sendResetLinkEmail')->name('pasa_admin.password.email');
Route::get('/pasa_admin-password/reset', 'pasa_admin\ForgotPasswordController@showLinkRequestForm')->name('pasa_admin.password.request');
Route::post('/pasa_admin-password/reset','pasa_admin\ResetPasswordController@reset');
Route::get('/pasa_admin-password/reset/{token}','pasa_admin\ResetPasswordController@showResetForm')->name('pasa_admin.password.reset');


Route::get('/pasa_admin/edit_carousel','AdminController@edit_carousel');
