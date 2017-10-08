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
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('admin', 'AdminController@index', ["middleware"=>"auth"])->name('admin.login');
Route::get('admin/logout', 'AdminController@logout')->name('admin.logout');
Route::get('agent', 'AgentController@index', ["middleware"=>"auth"])->name('agent.login');
Route::get('agent/logout', 'AgentController@logout')->name('agent.logout');

Route::group(['middleware' => 'admin'], function(){
Route::get('admin/dashboard', 'AdminController@dashboard')->name('admin.dashboard');
Route::resource('admin/hotels', 'AdminHotelsController',["as"=>"admin"]);
Route::resource('admin/users', 'AdminUsersController', ["as"=>"admin"]);
});

Route::group(['middleware' => 'agent'], function(){
Route::get('agent/dashboard', 'AgentController@dashboard')->name('agent.dashboard');
#Route::resource('admin/hotels', 'AdminHotelsController',["as"=>"admin"]);
#Route::resource('admin/users', 'AdminUsersController', ["as"=>"admin"]);
});
