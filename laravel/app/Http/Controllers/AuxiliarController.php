<?php

namespace App\Http\Controllers;

use App\Models\auxiliar;
use Illuminate\Http\Request;

class AuxiliarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('funcionarios.auxiliares.auxiliar');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('funcionarios.auxiliares.create_auxiliar');
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

        $request->validate([
            'nome' => 'required|string|max:255',
            'apelido' => 'required|string|max:255',
            'data_nascimento' => 'required|date',
            'morada' => 'required|string|max:255',
            'localidade' => 'required|string|max:255',
            'diabetes' => 'string|nullable',
            'medicaçao' => 'string|nullable',
            'doença' => 'string|nullable',
            'dependencia' => 'string|nullable',
            'alergia' => 'string|nullable',
            'contacto_familiar' => 'required|max:9'
            //falta a foto
        ]);
        /*
        if ($request->hasFile('logo')) {
            $request->file('logo')->storeAs('public/images/frutarias/', $frutaria->id . '.png');
        }*/

        //se os dados fornecidos não estão válidos, aparece uma mensagem de erro
        if ($request->fails()) {
            return response(['error' => $request->errors(), 'Validation Error']);
        }

        //senão, cria um utente
        $utente = auxiliar::create($data);

        return redirect('/inicio/funcionarios/auxiliares'); //vai ser redirecionada para o 'index'

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\auxiliar  $auxiliar
     * @return \Illuminate\Http\Response
     */
    public function show(auxiliar $auxiliar)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\auxiliar  $auxiliar
     * @return \Illuminate\Http\Response
     */
    public function edit(auxiliar $auxiliar)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\auxiliar  $auxiliar
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, auxiliar $auxiliar)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\auxiliar  $auxiliar
     * @return \Illuminate\Http\Response
     */
    public function destroy(auxiliar $auxiliar)
    {
        //
    }
}
