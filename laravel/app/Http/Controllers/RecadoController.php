<?php

namespace App\Http\Controllers;

use App\Models\recado;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;

class RecadoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $recados = recado::all();
        return view('info.recados.recados')->with('recados', $recados);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('info.recados.create_recado');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $data = $request->all();

        $validator = Validator::make($data, [
            'assunto' => 'required|string|max:255',
            'descriçao' => 'required|string|max:255',
            'responsavel' => 'string|max:255',
        ]);

        //se os dados fornecidos não estão válidos, aparece uma mensagem de erro
        if ($validator->fails()) {
            return response(['error' => $validator->errors(), 'Erro de validacao!!!']);
        }

        //senão, cria um utente
        $recado = recado::create($data);

        return redirect('/inicio/recados'); //vai ser redirecionada para o 'index'

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\recado  $recado
     * @return \Illuminate\Http\Response
     */
    public function show(recado $recados)
    {
        return view('info.recados.show_recado')->with('recados', $recados); //dá o recado com este ID

    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\recado  $recado
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, recado $recados)
    {

        $recados = recado::find($recados->id);
        $recados->update($request->all());
        $recados->save();

        return redirect('/inicio/recados/' . $recados->id . '/?sucesso_alteraçao_utente=1');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\recado  $recado
     * @return \Illuminate\Http\Response
     */
    public function destroy(recado $recado)
    {
        $recado->delete();
        return redirect('/inicio/recados');
    }
}
