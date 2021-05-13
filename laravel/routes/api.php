<?php

use App\Http\Controllers\API\UtentesApiController;
use App\Http\Controllers\API\UsersApiController;
use App\Http\Controllers\API\ProdutosApiController;
use App\Http\Controllers\API\EmentaApiController;
use App\Http\Controllers\API\RecadoApiController;
use App\Http\Controllers\API\ContactoApiController;
use App\Http\Controllers\API\ControloMpApiController;
use App\Http\Controllers\API\StockMovimentosApiController;
use App\Http\Controllers\API\TarefasUtenteApiController;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\AuthController;
use App\Models\utentes;
use App\Models\Contactos;
use App\Models\ementa;
use App\Models\produto;
use App\Models\recado;
use App\Models\tarefas_utente;
use App\Models\User;
use Carbon\Carbon;

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



/*Funcionários*/

Route::get('/funcionarios', [UsersApiController::class, 'index']);
Route::get('/funcionarios/create', [UsersApiController::class, 'create'])->middleware(['auth']);
Route::post('/funcionarios/store', [UsersApiController::class, 'store'])->middleware(['auth:api']) ; //quando fizer um post para 'utentes' vai ao controlador dentro do store,este recebe o pedido, grava na bd e redirectiona para /utentes
Route::get('/funcionarios/{id}', function ($id) {
    return User::find($id);
});
Route::get('/funcionarios/delete/{id}', function ($id) {
    if (!User::find($id)) {
        return response(['message' => 'Nao existe funcionario com esse ID.']);
    }
    User::find($id)->delete();
    //return 204; // em sucesso retorna 204
    return response(['message' => 'Funcionario eliminado.']);
});



/*Utentes*/
Route::get('/utentes', [UtentesApiController::class, 'index']);
Route::get('/utentes/create', [UtentesApiController::class, 'create'])->middleware(['auth']);
Route::post('/utentes/store', [UtentesApiController::class, 'store'])->middleware(['auth:api']); //quando fizer um post para 'utentes' vai ao controlador dentro do store,este recebe o pedido, grava na bd e redirectiona para /utentes
Route::get('/utentes/{id}', function ($id) {
    return utentes::find($id);
});
Route::post('/utentes/{id}/tarefas', function (Request $request, $id) {
    $params = $request->all();
    return tarefas_utente::get()->where("utente_id" , "=", $id)
            ->filter(function ($task) use($params) {
                return Carbon::parse($task->created_at)->isSameDay(Carbon::parse($params['date']));
            })
            ->all();
});
Route::get('utentes/delete/{id}', function ($id) {
    if (!utentes::find($id)) {
        return response(['message' => 'Nao existe utente com esse ID.']);
    }
    utentes::find($id)->delete();
    return response(['message' => 'Utente eliminado.']);
});

/*Contactos*/
Route::get('/contactos', [ContactoApiController::class, 'index']);
Route::get('/contactos/create', [ContactoAPiController::class, 'create'])->middleware(['auth']);
Route::post('/contactos/store', [ContactosApiController::class, 'store'])->middleware(['auth:api']); //quando fizer um post para 'utentes' vai ao controlador dentro do store,este recebe o pedido, grava na bd e redirectiona para /utentes
Route::get('/contactos/{id}', function ($id) {
    return utentes::find($id);
});
Route::get('/contactos/delete/{id}', function ($id) {
    if (!Contactos::find($id)) {
        return response(['message' => 'Nao existe contacto com esse ID.']);
    }
    Contactos::find($id)->delete();
    return response(['message' => 'Contacto eliminado.']);
});

/*Recados*/
Route::get('/recados', [RecadoApiController::class, 'index']);
Route::get('/recados/create', [RecadoApiController::class, 'create'])->middleware(['auth']);
Route::post('/recados/store', [RecadoApiController::class, 'store'])->middleware(['auth:api']) ; //quando fizer um post para 'utentes' vai ao controlador dentro do store,este recebe o pedido, grava na bd e redirectiona para /utentes
Route::get('/recados/{id}', function ($id) {
    return utentes::find($id);
});
Route::get('/recados/delete/{id}', function ($id) {
    if (!recado::find($id)) {
        return response(['message' => 'Nao existe recado com esse ID.']);
    }
    recado::find($id)->delete();
    return response(['message' => 'Recado eliminado.']);
});

/*Ementa*/

Route::get('/ementa', [EmentaApiController::class, 'index']);
Route::get('/ementa/create', [EmentaApiControllerd::class, 'create'])->middleware(['auth']);
Route::post('/ementa/store', [EmentaApiController::class, 'store'])->middleware(['auth:api']) ; //quando fizer um post para 'utentes' vai ao controlador dentro do store,este recebe o pedido, grava na bd e redirectiona para /utentes
Route::get('/ementa/{id}', function ($id) {
    return utentes::find($id);
});
Route::get('/ementa/delete/{id}', function ($id) {
    if (!ementa::find($id)) {
        return response(['message' => 'Nao existe ementa com esse ID.']);
    }
    ementa::find($id)->delete();
    //return 204; // em sucesso retorna 204
    return response(['message' => 'Ementa eliminada.']);
});

/*Stock*/
/*
Route::get('/ementa', [StockMovimentosApiController::class, 'index']);
Route::get('/ementa/create', [StockMovimentosApiController::class, 'create'])->middleware(['auth']);
Route::post('/ementa/store', [StockMovimentosApiController::class, 'store'])->middleware(['auth:api']) ;//quando fizer um post para 'utentes' vai ao controlador dentro do store,este recebe o pedido, grava na bd e redirectiona para /utentes
Route::get('ementa/{id}', function($id) {return utentes::find($id); });
Route::delete('ementa/delete/{id}', function($id) {
    utentes::find($id)->delete();
    //return 204; // em sucesso retorna 204
    return response(['message' => 'Ementa eliminada.']);});
    */

/*Produtos*/
Route::get('/produtos', [ProdutosApiController::class, 'index']);
Route::get('/produtos/create', [ProdutosApiController::class, 'create'])->middleware(['auth']);
Route::post('/produtos/store', [ProdutosApiController::class, 'store'])->middleware(['auth:api']) ; //quando fizer um post para 'utentes' vai ao controlador dentro do store,este recebe o pedido, grava na bd e redirectiona para /utentes
Route::get('/produtos/{id}', function ($id) {
    return utentes::find($id);
});
Route::get('/produtos/delete/{id}', function ($id) {
    if (!produto::find($id)) {
        return response(['message' => 'Nao existe produto com esse ID.']);
    }
    produto::find($id)->delete();
    //return 204; // em sucesso retorna 204
    return response(['message' => 'Ementa eliminada.']);
});







/*Register and Login */
Route::post('register', [AuthController::class, 'register']);
Route::post('login', [AuthController::class, 'login']);


/*Tarefas utente */

Route::get('get_tarefas', [TarefasUtenteApiController::class, 'index']);



/*
Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
*/



