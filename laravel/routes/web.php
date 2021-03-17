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
Route::get('/inicio', function () {
    return view('welcome');
});
Route::get('/inicio/utentes', function () {
    return view('utentes.lista_utentes');
});
Route::get('/inicio/auxiliares', function () {
    return view('funcionarios.auxiliares');
});
Route::get('/inicio/cozinheiros', function () {
    return view('funcionarios.cozinheiros');
});
Route::get('/inicio/recados', function () {
    return view('info.recados');
});
Route::get('/inicio/contactos', function () {
    return view('info.contactos');
});
Route::get('/inicio/ementa', function () {
    return view('ementa');
});
Route::get('/inicio/perfil', function () {
    return view('perfil');
});
Route::get('/inicio/stock-alimentos', function () {
    return view('stock.alimentos');
});
Route::get('/inicio/stock-produtos', function () {
    return view('stock.produtos');
});

Route::get('/inicio/controlo_mp', function () {
    return view('stock.controlomp');
});
Route::get('/inicio/create_utente', function () {
    return view('utentes.create_utente');
});


Route::get('/inicio/utente', function () {
    return view('utentes.show_utente');
});