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

Route::get('/modules', 'ModulesController@axiosData')->name('modules');
Route::get('/modules/all', 'ModulesController@index')->name('modules');
Route::resource('data', 'ModulesController');
Route::get('modules/create', 'ModulesController@create');
Route::get('modules/{id}', 'ModulesController@show');
Route::post('modules', 'ModulesController@store');
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/modules/delete/{id}', 'ModulesController@destroy');
Route::post('/modules/edit/{id}', 'ModulesController@update');
Route::get('/modules/edit/{id}', 'ModulesController@edit');
Route::get('/u/{id}', 'HomeController@users');
Route::get('/t', 'HomeController@usersGet');

