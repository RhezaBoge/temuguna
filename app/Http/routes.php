<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('home', 'HomeController@index');

//admin
	//dashboard
		Route::resource('admin/dashboard', 'Admin\dashboard\controller_admin_dashboard');
	//Tables
		Route::resource('admin/agency', 'Admin\database\controller_agency');
		Route::resource('admin/media-manager', 'Admin\database\controller_media_manager');
		
		Route::resource('admin/project-category', 'Admin\database\controller_project_category');
		Route::resource('admin/project-issue', 'Admin\database\controller_project_issue');
		Route::resource('admin/users-detail', 'Admin\database\controller_users_detail');
		Route::resource('admin/users-group', 'Admin\database\controller_users_group');
		


//login
Route::get('auth/login', 'Auth\AuthController@getLogin');
Route::post('auth/login', 'Auth\AuthController@postLogin');
//logout
Route::get('auth/logout', 'Auth\AuthController@getLogout');
//register
Route::get('auth/register', 'Auth\AuthController@getRegister');
Route::post('auth/register', 'Auth\AuthController@postRegister');
//reset Password
Route::get('password/email', 'Auth\PasswordController@getEmail');
Route::post('password/email', 'Auth\PasswordController@postEmail');

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);
