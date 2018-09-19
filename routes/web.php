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
    return view('welcomePage.welcomePage');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/home/userProfile', 'HomeController@userProfile')->name('userProfile');

Route::get('/home/uploadImage', 'ImageUploadController@showUploadForms')->name('showUploadForms');
Route::post('/home/uploadImage', 'ImageUploadController@uploadImage')->name('uploadImage');

Route::get('/home/uploadImage/{image_id}', 'ImageUploadController@getImageDetails')->name('uploadImage-values');
Route::get('/home/uploadImage/{image_id}/classify', 'ImageClassifyController@showClassification')->name('uploadImage-classify');

//	ADMIN Routes
Route::group(['namespace' => 'Admin'], function() {
	Route::prefix('admin')->group(function() {
		Route::get('/', 'HomeController@index')->name('admin.home');

		//	Auth
		Route::get('login', 'Auth\LoginController@showLoginForm')->name('admin.login');
		Route::post('login', 'Auth\LoginController@login');
		Route::post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name('admin.password.email');
		Route::get('register', 'Auth\RegisterController@showRegistrationForm')->name('admin.register');
		Route::post('register', 'Auth\RegisterController@register');
		Route::get('password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('admin.password.request');
		Route::post('password/reset', 'Auth\ResetPasswordController@reset');
		Route::get('password/reset/{token}', 'Auth\ResetPasswordController@showResetForm')->name('admin.password.reset');
		Route::post('logout', 'Auth\LoginController@logout')->name('admin.logout');
	});
});
