<?php

namespace App\Http\Controllers\API;


use Illuminate\Support\Facades\Validator;
use App\Http\Controllers\Controller;
use App\Models\utentes;
use Illuminate\Http\Request;

class UtentesApiController extends Controller
{
    /**
     * Retorna os dados em utentes
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return utentes::all();
    }
    

    /**
     * Este método vlaida e guarda um novo utente.
     * 
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->all();

        $validator = Validator::make($data, [
            'nome' => 'required|string|max:255',
            'apelido' => 'required|string|max:255',
            'data_nascimento' => 'required|date',
            'morada' => 'required|string|max:255',
            'localidade' => 'required|string|max:255',
            'diabetes' => 'string',
            'medicaçao' => 'string',
            'doença' => 'string',
            'dependencia' => 'string',
            'alergia' => 'string',
            'contacto_familiar' => 'required|max:9'
            
        ]);

        //se os dados fornecidos não estão válidos, aparece uma mensagem de erro
        if ($validator->fails()) {
            return response(['error' => $validator->errors(), 'Validation Error']);
        }

        //senão, cria um utente
        $utente = utentes::create($data);

        return redirect('/utentes'); //vai ser redirecionada para o 'index'
    }

    /**
     * Este método vai mostrar apenas um utente que foi passado na rota
     * 
     * @param  \App\Models\Utentes  $utentes
     * @return \Illuminate\Http\Response
     */
    public function show(Utentes $utentes)
    {
        // return response(['project' => new ProjectResource($project), 'message' => 'Retrieved successfully'], 200);

    }

    /**
     *  Este método recebe um pedido HTTP e um determinado item que deve ser editado como parametro.
     *  Atualiza o utente.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Utentes  $utentes
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Utentes $utentes)
    {
        $utentes->update($request->all());
    }

   //método destroy nas rotas api.php
}
