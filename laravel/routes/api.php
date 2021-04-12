<?php

use App\Http\Controllers\API\UtentesController;
use App\Http\Controllers\API\UsersController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\AuthController;
use App\Models\utentes;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/


Route::get('/produtos', function () {
    return 'produtos aqui';
});

Route::get('/users', [UsersController::class, 'index']);
Route::get('/utentes', [UtentesController::class, 'index']);

Route::get('/utentes2', [UtentesController::class, 'index_2']);

//vai buscar utente por id
Route::get('utentes/{id}', function($id) {
    return utentes::find($id);
});

//apaga utente por id
Route::delete('utentes/delete/{id}', function($id) {
    utentes::find($id)->delete();
    return 204; // em sucesso
});


/* //não entendi:
Route::put('articles/{id}', function(Request $request, $id) {
    $article = utentes::findOrFail($id);
    $article->update($request->all());

    return $article;
});

Route::post('utentes1', function(Request $request) {
    return utentes::create($request->all);
});*/







//Criação de utentes (para o botão de add utente)
Route::get('/utentes/create', [UtentesController::class, 'create'])->middleware(['auth'])->name('create_utente');
//quando fizer um post para 'utentes' vai ao controlador dentro do store,este recebe o pedido, grava na bd e redirectiona para /utentes
Route::post('/utentes', [UtentesController::class, 'store'])->middleware(['auth:api'])->name('guarda_utente');







Route::post('register', [AuthController::class, 'register']);
Route::post('login', [AuthController::class, 'login'])->name('login');

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
