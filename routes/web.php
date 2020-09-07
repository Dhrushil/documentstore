<?php

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
    return view('welcome');
});



Auth::routes();

Route::get('/modules', 'ModulesController@axiosData')->name('modules');
Route::get('/modules/all', 'ModulesController@index');
Route::resource('data', 'ModulesController');
Route::get('modules/create', 'ModulesController@create');
Route::get('modules/{id}', 'ModulesController@show');
Route::post('modules', 'ModulesController@store');
Route::get('/home', 'HomeController@index')->name('home');


