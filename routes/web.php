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
Auth::routes();

Route::get('/','HomeController@index')->name('home');

Route::get('admin/login','Admin\Auth\AdminAuthController@getLogin')->name('adminLogin');
Route::post('admin/login', 'Admin\Auth\AdminAuthController@postLogin')->name('adminLoginPost');
Route::post('admin/logout', 'Admin\Auth\AdminAuthController@logout')->name('adminLogout');

Route::get('admin/forgot-password','Admin\Auth\ForgotPasswordController@showLinkRequestForm')->name('forgot_password');
Route::post('admin/password/email','Admin\Auth\ForgotPasswordController@sendResetLinkEmail')->name('admin.password.email');

Route::get('admin/password/reset/{token}','Admin\Auth\ResetPasswordController@showResetForm')->name('admin.password.reset');
// Route::post('admin/password/reset','Admin\Auth\ResetPasswordController@reset');
Route::post('admin/password/reset','Admin\Auth\ResetPasswordController@reset')->name('admin.password.update');

// Route::post('admin/password/confirm','Admin\Auth\ConfirmPasswordController@confirm');
// Route::get('admin/password/confirm','Admin\Auth\ConfirmPasswordController@showConfirmForm')->name('admin.password.confirm');


Route::group(['prefix' => 'admin','middleware' => 'adminauth'], function () {
	// Admin Dashboard
	Route::get('/','AdminController@dashboard')->name('admin.home');	
	Route::get('dashboard','AdminController@dashboard')->name('dashboard');	
	Route::get('email-template','Admin\EmailTemplateController@list')->name('email_template');	
	Route::get('email-template-edit/{id}','Admin\EmailTemplateController@edit')->name('email_template.edit');	
	Route::post('email-template-update','Admin\EmailTemplateController@update')->name('email_template.update');	
	Route::get('my-profile','AdminController@myProfile')->name('my-profiles');	
	Route::view('change-password','admin.change_password')->name('admin.change-password');
	Route::post('update-profile','AdminController@updateProfile')->name('updateProfile');	
	Route::post('update-password','AdminController@updatePassword')->name('updatePassword');	
	Route::name('admin.')->namespace('Admin')->group(function(){
	// cms page route
		Route::get('/cms-list','CmsPagesController@index')->name('cms.list');
	    Route::get('/cms-edit/{id}','CmsPagesController@edit')->name('cms.edit');
	    Route::post('/cms-update','CmsPagesController@update')->name('cms.update');	
    //global setting
    
    Route::get('/global-setting','GlobalSettingController@index')->name('global_setting.list');
    Route::get('/global-setting-edit','GlobalSettingController@edit')->name('global_setting.edit');
    Route::post('/global-setting/update','GlobalSettingController@update')->name('global_setting.update');
	
	//Slider
	Route::resource('/slider','SliderController');
	Route::get('/slider/status/{id}','SliderController@status')->name('slider.status');

	});

});
Route::get('clear-cache',function(){
    Artisan::call('cache:clear');
    Artisan::call('route:clear');
    Artisan::call('view:clear');
    Artisan::call('config:cache');
    return '<h1>Cache cleared</h1>';
});
