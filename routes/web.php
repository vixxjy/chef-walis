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
// pages
Route::get('/',['uses' => 'PagesController@index', 'as' => 'landing']);
// auth
Route::get('/login',['uses' => 'UserController@index', 'as' => 'login']);
Route::post('/sigin',['uses' => 'UserController@login', 'as' => 'login.post']);
Route::get('/logout', ['uses' => 'UserController@logout','as' => 'user.logout']);
// dashboard
Route::get('/dashboard',['uses' => 'DashboardController@index', 'as' => 'dashboard']);
