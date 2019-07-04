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

Route::get('/', "IndexController@index");

//
Route::get('cart/add', 'CartController@addGoods2');
Route::get('redis/list', 'CartController@redisList');
Route::get('redis/add', 'CartController@redisAdd');
Route::get('redis/del', 'CartController@redisDel');
//

Route::get('thrift/list', 'IndexController@thrift');

// 权限管理
Route::prefix('role')->group(function () {
    Route::get('/user/list', 'RoleController@userList');
    Route::get('/role/list', 'RoleController@roleList');
    Route::get('/permission/list', 'RoleController@permissionList');
});

// 后台管理
Route::prefix('admin')->group(function () {
    Route::get('/', 'AdminController@index');
    Route::get('/index', 'AdminController@index');
    Route::get('/test', 'AdminController@test');
});