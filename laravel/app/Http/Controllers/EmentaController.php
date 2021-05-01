<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Validator;
use App\Models\ementa;
use Illuminate\Http\Request;

class EmentaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('ementa.show_ementa');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('ementa.create_ementa');
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
            'nutricionista' => 'string|max:255|nullable',
            'info' => 'string|max:255|nullable',
            'data_inicio' => 'required|date',
            'data_fim' => 'required|date',

            'seg_sopa' => 'string|nullable',
            'seg_almoço' => 'string|nullable',
            'seg_sob_almoço' => 'string|nullable',
            'seg_jantar' => 'string|nullable',
            'seg_sob_jantar' => 'string|nullable',

            'ter_sopa' => 'string|nullable',
            'ter_almoço' => 'string|nullable',
            'ter_sob_almoço' => 'string|nullable',
            'ter_jantar' => 'string|nullable',
            'ter_sob_jantar' => 'string|nullable',

            'qua_sopa' => 'string|nullable',
            'qua_almoço' => 'string|nullable',
            'qua_sob_almoço' => 'string|nullable',
            'qua_jantar' => 'string|nullable',
            'qua_sob_jantar' => 'string|nullable',

            'qui_sopa' => 'string|nullable',
            'qui_almoço' => 'string|nullable',
            'qui_sob_almoço' => 'string|nullable',
            'qui_jantar' => 'string|nullable',
            'qui_sob_jantar' => 'string|nullable',
            
            'sex_sopa' => 'string|nullable',
            'sex_almoço' => 'string|nullable',
            'sex_sob_almoço' => 'string|nullable',
            'seg_sob_jantar' => 'string|nullable',
            'sex_jantar' => 'string|nullable',
            'sex_sob_jantar' => 'string|nullable',

            'sab_sopa' => 'string|nullable',
            'sab_almoço' => 'string|nullable',
            'sab_sob_almoço' => 'string|nullable',
            'sab_jantar' => 'string|nullable',
            'sab_sob_jantar' => 'string|nullable',

            'dom_sopa' => 'string|nullable',
            'dom_almoço' => 'string|nullable',
            'dom_sob_almoço' => 'string|nullable',
            'dom_jantar' => 'string|nullable',
            'dom_sob_jantar' => 'string|nullable',
        ]);

        //se os dados fornecidos não estão válidos, aparece uma mensagem de erro
        if ($validator->fails()) {
            return response(['error' => $validator->errors(), 'Erro de Validacao!!!']);
        }

        //senão, cria um utente
        $ementa = ementa::create($data);

        
        return redirect('/inicio/ementa'); //vai ser redirecionada para o 'index'

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ementa  $ementa
     * @return \Illuminate\Http\Response
     */
    public function show(ementa $ementa)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ementa  $ementa
     * @return \Illuminate\Http\Response
     */
    public function edit(ementa $ementa)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\ementa  $ementa
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ementa $ementa)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ementa  $ementa
     * @return \Illuminate\Http\Response
     */
    public function destroy(ementa $ementa)
    {
        //
    }
}
