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

Route::get('/','IndexController@index');

//登录
Route::any('users/login','UsersController@login');
Route::any('users/logout','UsersController@logout');

//账户管理
Route::group(['prefix'=>'account'],function() {
	$controller = 'Account\AccountController@';
	#账户列表
	Route::get('lister',$controller.'lister');
	#添加管理员
	Route::any('add',$controller.'add');
});
//角色管理
Route::group(['prefix'=>'role'],function() {
	$controller = 'Role\RoleController@';
	#角色列表
	Route::get('lister',$controller.'lister');
	#角色添加
	Route::any('add',$controller.'add');
});