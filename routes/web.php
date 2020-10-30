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
    return view('menus.landingPage');
});

Route::get('/courses', function () {
    return view('courses.index');
});

Route::get('/courses/create', function () {
    return view('courses.create');
});

Route::get('/courses/view', function () {
    return view('courses.view');
});
