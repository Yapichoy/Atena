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
Route::get('/tasks', 'TaskController@index');
Route::post('/task', 'TaskController@store');
Route::delete('/task/{task}', 'TaskController@destroy');
Auth::routes();

Route::get('/profile', 'HomeController@index');
Route::get('/msg', 'HomeController@msg');
Route::get('/offers','OrderController@index');
Route::get('/create', function (){
    return view('page.create');
})->middleware('auth');
Route::post('/order/create', 'OrderController@createOrder');

Route::get('/myorders', 'OrderController@myOrders');
/*Route::get('auth/login', 'Auth\AuthController@getLogin');
Route::post('auth/login', 'Auth\AuthController@postLogin');
Route::get('auth/logout', 'Auth\AuthController@getLogout');*/