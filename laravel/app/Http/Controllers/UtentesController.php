<?php

namespace App\Http\Controllers\API;

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Validator;
use App\Models\utentes;
use Illuminate\Http\Request;


class UtentesController extends Controller
{
    /**
     * 
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //return view('utentes.lista_utentes');

        $utentes = utentes::all(); //vai ao modelo e ve as utentes
        return view('utentes.lista_utentes')->with('utentes', $utentes); //recebe dentro de 'utentes' todos os utentes
   
    }


    public function create()
    {

        return view('utentes.create_utente');
    }



    public function edit(utentes $utente)
    {
        //  return view('backoffice.frutarias.edit', ['frutaria' => $frutaria]);
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
            'nome' => 'required|string|max:255',
            'apelido' => 'required|string|max:255',
            'data_nascimento' => 'required|date',
            'morada' => 'required|string|max:255',
            'localidade' => 'required|string|max:255',
            'diabetes' => 'string|nullable',
            'medicaçao' => 'string|nullable',
            'condiçao' => 'string|nullable',
            'dieta' => 'string|nullable',
            'hipertensao' => 'string|nullable',
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
        if ($validator->fails()) {
            return response(['error' => $validator->errors(), 'Validation Error']);
        }

        //senão, cria um utente
        $utente = utentes::create($data);

        return redirect('/inicio/lista_utentes'); //vai ser redirecionada para o 'index'

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\utentes  $utentes
     * @return \Illuminate\Http\Response
     */
    public function show(utentes $utente)
    {
        return view('utentes.show_utente')->with('utente', $utente); //dá o utente com este ID
    }



    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\utentes  $utentes
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, utentes $utente)
    {
        /*
        
        $frutaria->update($request->all());

        if ($request->hasFile('logo')) {
            $request->file('logo')->storeAs('public/images/frutarias/', $frutaria->id . '.png');
        }

        return redirect('/frutarias?sucesso_alteraçao_frutaria=1');

        
        
        */
    
    

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\utentes  $utentes
     * @return \Illuminate\Http\Response
     */
    public function destroy(utentes $utente)
    {
        $utente->delete();
        return redirect('/utentes?sucesso_destroy_utente=1');
    }
}
