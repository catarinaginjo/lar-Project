<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Validator;
use App\Models\Recados;
use Illuminate\Http\Request;
use Carbon;

class RecadosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $recados = Recados::all();
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
            'responsavel' => 'required|string|max:255',
        ]);

        //se os dados fornecidos não estão válidos, aparece uma mensagem de erro
        if ($validator->fails()) {
            return response(['error' => $validator->errors(), 'Erro de validacao!!!']);
        }

        //senão, cria um utente
        $recado = Recados::create($data);

        return redirect('/inicio/recados'); //vai ser redirecionada para o 'index'

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Recados  $recados
     * @return \Illuminate\Http\Response
     */
    public function show(Recados $recados)
    {
        return view('info.recados.show_recado')->with('recados', $recados); //dá o recado com este ID

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Recados  $recados
     * @return \Illuminate\Http\Response
     */
    public function edit(Recados $recados)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Recados  $recados
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Recados $recados)
    {

        $recados = Recados::find($recados->id);
        $recados->update($request->all());
        $recados->save();

        return redirect('/inicio/recados/' . $recados->id . '/?sucesso_alteraçao_utente=1');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Recados  $recados
     * @return \Illuminate\Http\Response
     */
    public function destroy(Recados $recado)
    {
        $recado->delete();
        return redirect('/inicio/recados');
    }
}
