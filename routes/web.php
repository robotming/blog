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
Route::get('/blog/list', "BlogController@list");
Route::get('/blog/detail/{id}', "BlogController@detail");



//
Route::get('cart/add', 'CartController@addGoods2');
Route::get('redis/list', 'CartController@redisList');
Route::get('redis/add', 'CartController@redisAdd');
Route::get('redis/del', 'CartController@redisDel');
//

Route::get('thrift/list', 'IndexController@thrift');


// 后台管理
Route::prefix('admin')->namespace('admin')->group(function () {
    Route::get('/', 'AdminController@index');
    Route::get('/index', 'AdminController@index');
    Route::get('/test', 'AdminController@test');


    Route::get('/article/index', "ArticleController@index");
    Route::any('/article/add', "ArticleController@add");
    Route::get('/article/update', "ArticleController@update");
    Route::get('/article/del', "ArticleController@del");
    Route::get('/article/detail', "ArticleController@detail");

    // 权限管理
    Route::get('/user/list', 'UserController@list');
    Route::any('/user/add', 'UserController@userAdd');
    Route::any('/user/update', 'UserController@update');
    Route::get('/user/detail', 'UserController@detail');
    Route::get('/user/del', 'UserController@delete');
    Route::get('/user/permission', 'UserController@permission');

    Route::get('/role/list', 'RoleController@roleList');
    Route::get('/permission/list', 'RoleController@permissionList');
});