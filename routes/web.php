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

Route::get('/user', function () {
    return view('/users/index');
});

Route::get('user/add', function () {
    return view('/users/add');
});

Route::get('user/update', function () {
    return view('/users/update');
});

Route::get('product', function () {
    return view('/products/index');
});

Route::get('product/add', function () {
    return view('/products/add');
});

Route::get('product/update', function () {
    return view('/products/update');
});

Route::get('category', function () {
    return view('/categories/index');
});

Route::get('category/add', function () {
    return view('/categories/add');
});

Route::get('category/update', function () {
    return view('/categories/update');
});
