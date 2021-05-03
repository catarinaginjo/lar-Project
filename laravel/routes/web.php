<?php

use App\Http\Controllers\UtentesController;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\ContactosController;
use App\Http\Controllers\RecadoController;
use App\Http\Controllers\EmentaController;
use App\Http\Controllers\ProdutoController;
use App\Http\Controllers\ControloMpController;
use App\Http\Controllers\StockMovimentosController;


use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');


/* Rotas com middleware */
//Route::middleware('auth:api')->group(function () {

/*Home Page*/
Route::get('/lar', function () {
    return view('welcome');
});


/*Funcionários*/
Route::get('/inicio/lista_funcionarios', [UsersController::class, 'show_funcionarios']);
Route::get('/inicio/funcionarios/create_funcionario', [UsersController::class, 'create']);
Route::post('/inicio/funcionarios/store_funcionario', [UsersController::class, 'store']);
Route::get('/inicio/funcionarios/{user}', [UsersController::class, 'show']);
Route::post('/inicio/funcionarios/edit/{user}', [UsersController::class, 'edit']);
Route::post('/inicio/funcionarios/update/{user}', [UsersController::class, 'update']);
Route::post('/inicio/funcionarios/destroy/{user}', [UsersController::class, 'destroy']);

/*Utentes*/
Route::get('/inicio/lista_utentes', [UtentesController::class, 'index']);
Route::get('/inicio/create_utente', [UtentesController::class, 'create']);
Route::post('/inicio/store_utente', [UtentesController::class, 'store']);
Route::get('/inicio/utente/{utente}', [UtentesController::class, 'show']);
Route::post('inicio/utentes/update/{utente}', [UtentesController::class, 'update']);
Route::post('/inicio/utente/destroy/{utente}', [UtentesController::class, 'destroy']);


/*Perfil*/
Route::get('/inicio/perfil',  [UsersController::class, 'show_perfil']);
Route::post('/inicio/perfil/update/{user}', [UsersController::class, 'update']);


/*Contactos*/
Route::get('/inicio/contactos', [ContactosController::class, 'index']);
Route::get('/inicio/contactos/create_contacto', [ContactosController::class, 'create']);
Route::post('/inicio/contactos/store_contacto', [ContactosController::class, 'store']);
Route::get('/inicio/contactos/{contacto}', [ContactosController::class, 'show']);
Route::post('inicio/contactos/update/{contacto}', [ContactosController::class, 'update']);
Route::post('/inicio/contactos/destroy/{contacto}', [ContactosController::class, 'destroy']);


/*Recados*/
Route::get('/inicio/recados', [RecadoController::class, 'index']);
Route::get('/inicio/recados/create_recado', [RecadoController::class, 'create']);
Route::post('/inicio/contactos/store_recado', [RecadoController::class, 'store']);
Route::get('/inicio/recados/{recado}', [RecadoController::class, 'show']);
Route::post('inicio/recados/edit/{recado}', [RecadoController::class, 'edit']);
Route::post('inicio/recados/update/{recado}', [RecadoController::class, 'update']);
Route::post('/inicio/recados/destroy/{recado}', [RecadoController::class, 'destroy']);


/*Ementa*/
Route::get('/inicio/ementa', [EmentaController::class, 'index']);
Route::get('/inicio/ementa/create-ementa', [EmentaController::class, 'create']);
Route::post('/inicio/ementa/store-ementa', [EmentaController::class, 'store']);

/*Produtos | Stock*/
Route::get('/inicio/stock/produtos', [ProdutoController::class, 'lista_produtos']);
Route::get('/inicio/produtos/create_produto', [ProdutoController::class, 'create_produto']);
Route::post('/inicio/produtos/store_produto', [ProdutoController::class, 'store']);
Route::post('/inicio/produtos/destroy_produto/{produto}', [ProdutoController::class, 'destroy']);
Route::post('/inicio/produtos/update_produto{produto}', [ProdutoController::class, 'produtos_update']);
Route::get('/inicio/produtos/movimentos/{produto}', [ProdutoController::class, 'show_movimentos']);

//Movimentos
Route::post('/inicio/movimentos/update/{movimento}', [StockMovimentosController::class, 'update']); //para editar a quantidade atual



/*Controlo matérias-Primas*/
Route::get('/inicio/controlo_materias_primas', [ControloMpController::class, 'index']);
Route::get('/inicio/controlo_materias_primas/create', [ControloMpController::class, 'create']);

//});
require __DIR__ . '/auth.php';
