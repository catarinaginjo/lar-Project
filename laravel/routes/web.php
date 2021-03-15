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
Route::get('/inicio/utentes', function () {
    return view('show_utentes');
});
Route::get('/inicio/auxiliares', function () {
    return view('auxiliares');
});
Route::get('/inicio/cozinheiros', function () {
    return view('cozinheiros');
});