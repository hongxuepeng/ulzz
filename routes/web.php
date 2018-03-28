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

//前端测试页面
Route::any('test','PublicController@test');

Route::get('/','IndexController@index');

//菜单提取
Route::any('getMenu','PublicController@getMenu');

//角色提取
Route::any('getRole','PublicController@getRole');

//返回当前菜单停留位置
Route::any('currentMenu','PublicController@currentMenu');

//登录
Route::any('users/login','UsersController@login');
Route::any('users/logout','UsersController@logout');

//账户管理
Route::group(['prefix'=>'account'],function() {
   $controller = 'Account\AccountController@';
   #账户列表
   Route::any('lister',$controller.'lister');
   #添加管理员
   Route::any('add',$controller.'add');
   #账户修改
   Route::any('edit',$controller.'edit');
   //用户删除
   Route::get('batch',$controller.'batch');
});
//角色管理
Route::group(['prefix'=>'role'],function() {
   $controller = 'Role\RoleController@';
   #角色列表
   Route::get('lister',$controller.'lister');
   #角色添加
   Route::any('add',$controller.'add');
});

//菜单管理
Route::group(['prefix'=>'menu'],function() {
   $controller = 'Menu\MenuController@';
   #菜单列表页
   Route::any('lister',$controller.'lister');
   #菜单添加
   Route::any('add',$controller.'add');
   #菜单修改
   Route::any('edit',$controller.'edit');
   #菜单删除
   Route::any('del',$controller.'del');

});