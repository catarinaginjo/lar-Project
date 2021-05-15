<?php

use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\UtentesController;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\ContactosController;
use App\Http\Controllers\RecadoController;
use App\Http\Controllers\EmentaController;
use App\Http\Controllers\ProdutoController;
use App\Http\Controllers\ControloMpController;
use App\Http\Controllers\StockMovimentosController;
use Illuminate\Support\Facades\Route;



/* Rotas com middleware */

Route::group(['middleware' => ['auth']], function () {

    Route::get('/dashboard', function () {
        return view('dashboard');
    });
    
    Route::group(['middleware' => ['admin.only']], function () {

        /*Home Page*/
        Route::get('/', [UsersController::class, 'homepage']);
        Route::get('/lar', [UsersController::class, 'homepage']);

        /*Funcionários*/
        Route::get('/inicio/lista_funcionarios', [UsersController::class, 'show_funcionarios']);
        Route::get('/inicio/funcionarios/create_funcionario', [UsersController::class, 'create']);
        Route::post('/inicio/funcionarios/store_funcionario', [UsersController::class, 'store']);
        Route::get('/inicio/funcionarios/{user}', [UsersController::class, 'show']);
        Route::post('/inicio/funcionarios/edit/{user}', [UsersController::class, 'edit']);
        Route::post('/inicio/funcionarios/update/{user}', [UsersController::class, 'update']);
        Route::post('/inicio/funcionarios/destroy/{user}', [UsersController::class, 'destroy']);


        Route::post('/inicio/superadmin/store', [UsersController::class, 'store']);
        Route::get('/inicio/superadmin/lista_funcionarios', [UsersController::class, 'show_all_funcionarios']); //admin, superadmin, auxiliar, cozinheiro
        Route::get('/inicio/superadmin/lista-funcionarios/create', [UsersController::class, 'create']);

        /*Utentes*/
        Route::get('/inicio/lista_utentes', [UtentesController::class, 'index']);
        Route::get('/inicio/create_utente', [UtentesController::class, 'create']);
        Route::post('/inicio/store_utente', [UtentesController::class, 'store']);
        Route::get('/inicio/utente/{utente}', [UtentesController::class, 'show']);
        Route::post('inicio/utentes/update/{utente}', [UtentesController::class, 'update']);
        Route::post('/inicio/utente/destroy/{utente}', [UtentesController::class, 'destroy']);


        /*Perfil*/
        Route::get('/inicio/perfil/{perfil}',  [UsersController::class, 'show_perfil']);
        Route::post('/inicio/perfil/update/{user}', [UsersController::class, 'update_perfil']);


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
        Route::post('/inicio/recados/store_recado', [RecadoController::class, 'store']);
        Route::get('/inicio/recados/show/{recado}', [RecadoController::class, 'show']);
        Route::post('/inicio/recados/edit/{recado}', [RecadoController::class, 'edit']);
        Route::post('/inicio/recados/update/{recado}', [RecadoController::class, 'update']);
        Route::post('/inicio/recados/destroy/{recado}', [RecadoController::class, 'destroy']);

        /*Ementa*/
        Route::get('/inicio/lista-ementas', [EmentaController::class, 'lista_ementas']);
        Route::get('/inicio/lista-ementas/show/{ementa}', [EmentaController::class, 'show_ementa']);
        Route::get('/inicio/ementa/create-ementa', [EmentaController::class, 'create']);
        Route::post('/inicio/ementa/store-ementa', [EmentaController::class, 'store']);
        Route::post('/inicio/ementa/destroy/{ementa}', [EmentaController::class, 'destroy']);
        Route::post('/inicio/lista-ementas/update/{ementa}', [EmentaController::class, 'update']);

        /*Produtos | Stock*/
        Route::get('/inicio/stock/produtos', [ProdutoController::class, 'lista_produtos']);
        Route::get('/inicio/produtos/create_produto', [ProdutoController::class, 'create_produto']);
        Route::post('/inicio/produtos/store_produto', [ProdutoController::class, 'store']);
        Route::post('/inicio/produtos/destroy_produto/{produto}', [ProdutoController::class, 'destroy']);
        Route::post('/inicio/produtos/update_produto{produto}', [ProdutoController::class, 'produtos_update']);

        //Movimentos de stock*/
        Route::get('/inicio/produtos/movimentos/{produto}', [ProdutoController::class, 'show_movimentos']);
        Route::get('/inicio/produtos/{produto}/create', [StockMovimentosController::class, 'create']);
        Route::post('/inicio/produtos/{produto}/store_movimento', [StockMovimentosController::class, 'store']);
        Route::post('/inicio/movimentos/update/{movimento}', [StockMovimentosController::class, 'update']);

        /*Controlo matérias-Primas*/
        Route::get('/inicio/controlo_materias_primas', [ControloMpController::class, 'index']);
        Route::get('/inicio/controlo_materias_primas/create', [ControloMpController::class, 'create']);
        Route::post('/inicio/controlo_materias_primas/store', [ControloMpController::class, 'store']);
        Route::post('/inicio/controlo_materias_primas/destroy/{controlo_mp}', [ControloMpController::class, 'destroy']);
    });
});
require __DIR__ . '/auth.php';
