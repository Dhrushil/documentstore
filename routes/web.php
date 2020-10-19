<?php

use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Route;

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
    return view('landing');
});



Auth::routes();

Route::get('/apiTest', function() {
    return view('apiTest');
    
});

//crud Routes
Route::get('/datadump/moduledatagetall', 'ModulesController@axiosData')->name('modules');
Route::get('/datadump/moduledatagetbyuser/{created_by_id}', 'ModulesController@userData')->name('modules');
Route::get('/modules/all', 'ModulesController@index')->name('modules');
Route::resource('data', 'ModulesController');
Route::get('modules/create', 'ModulesController@create');
Route::get('modules/{id}', 'ModulesController@show');
Route::post('modules', 'ModulesController@store');
Route::get('/modules/delete/{id}', 'ModulesController@destroy');
Route::post('/modules/edit/{id}', 'ModulesController@update');
Route::get('/modules/edit/{id}', 'ModulesController@edit');
Route::get('/home', 'HomeController@index');

// systemPages Routes
Route::get('/settings', 'ProfileController@settings');
Route::get('/admin', 'ProfileController@admin');
Route::get('/admin/dashboard', 'ProfileController@admindash');
Route::get('/admin/modules', 'ProfileController@adminmodule');
Route::get('/admin/alerts', 'ProfileController@adminAlert');
Route::get('/u/{id}', 'HomeController@users');

