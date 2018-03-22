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
    return view('index');
});
Route::group(['prefix'=>'menu'],function() {
    $controller = 'Menu\MenuController@';
    #菜单列表页
    Route::any('lister',$controller.'lister');
    #菜单添加
    Route::any('add',$controller.'add');
});
#菜单管理 菜单列表
Route::get('admin_menu_index','MenuController@index');