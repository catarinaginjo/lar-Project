<?php

use App\Http\Controllers\UtentesController;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\ContactosController;
use App\Http\Controllers\RecadosController;
use Illuminate\Support\Facades\Route;



Route::get('/', function () {
    return view('welcome');
});
Route::get('/create', function () {
    return view('utentes.create');
});



Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');



/* Rotas com middleware */
//Route::middleware('auth:api')->group(function () {

Route::get('/inicio', function () {
    return view('welcome');
});

Route::get('/inicio/recados/id', function () {
    return view('info.ver_recado');
});
Route::get('/inicio/ementa', function () {
    return view('ementa');
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


/*Funcionários */
Route::get('/inicio/lista_funcionarios', [UsersController::class, 'show_funcionarios']);
Route::get('/inicio/funcionarios/create_funcionario', [UsersController::class, 'create']);
Route::get('/inicio/funcionarios/{user}', [UsersController::class, 'show']);
Route::post('/inicio/funcionarios/store_funcionario', [UsersController::class, 'store']);
Route::post('/inicio/funcionarios/edit/{user}', [UsersController::class, 'edit']);
Route::post('/inicio/funcionarios/update/{user}', [UsersController::class, 'update']);
Route::post('/inicio/funcionarios/destroy/{user}', [UsersController::class, 'destroy']);

/*Utentes*/
Route::get('/inicio/lista_utentes', [UtentesController::class, 'index']);
Route::get('/inicio/create_utente', [UtentesController::class, 'create']);
Route::get('/inicio/utente/{utente}', [UtentesController::class, 'show']);
Route::post('inicio/utentes/update/{utente}', [UtentesController::class, 'update']);
Route::post('/inicio/utente/destroy/{utente}', [UtentesController::class, 'destroy']);
Route::post('/inicio/store_utente', [UtentesController::class, 'store']);

/*Perfil */
Route::get('/inicio/perfil',  [UsersController::class, 'show_perfil']);
Route::post('/inicio/perfil/update/{user}', [UsersController::class, 'update']);


/*Contactos */
Route::get('/inicio/contactos', [ContactosController::class, 'index']);
Route::get('/inicio/contactos/create_contacto', [ContactosController::class, 'create']);
Route::post('/inicio/contactos/store_contacto', [ContactosController::class, 'store']);
Route::get('/inicio/contactos/{contacto}', [ContactosController::class, 'show']);
Route::post('inicio/contactos/update/{contacto}', [ContactosController::class, 'update']);
Route::post('/inicio/contactos/destroy/{contacto}', [ContactosController::class, 'destroy']);


/*Recados */
Route::get('/inicio/recados', [RecadosController::class, 'index']);
Route::get('/inicio/recados/create_recado', [RecadosController::class, 'create']);
Route::post('/inicio/contactos/store_recado', [RecadosController::class, 'store']);
Route::get('/inicio/recados/{recado}', [RecadosController::class, 'show']);
Route::post('inicio/recados/edit/{recado}', [RecadosController::class, 'edit']);
Route::post('inicio/recados/update/{recado}', [RecadosController::class, 'update']);
Route::post('/inicio/recados/destroy/{recado}', [RecadosController::class, 'destroy']);



//});
require __DIR__ . '/auth.php';
