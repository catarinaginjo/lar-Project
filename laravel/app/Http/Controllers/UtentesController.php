<?php

namespace App\Http\Controllers\API;

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Validator;
use App\Models\utentes;
use Illuminate\Http\Request;

class UtentesController extends Controller
{
    public function index()
    {
        $utentes = utentes::all(); //vai ao modelo e ve as utentes
        return view('utentes.lista_utentes')->with('utentes', $utentes); //recebe dentro de 'utentes' todos os utentes
    }

    public function create()
    {
        return view('utentes.create_utente');
    }

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
            'alergia' => 'string|nullable',
            'contacto_familiar' => 'required|max:9',
            'cuidados' => 'string|nullable',
        ]);

        //se os dados fornecidos não estão válidos, aparece uma mensagem de erro
        if ($validator->fails()) {
            return response(['error' => $validator->errors(), 'Erro de Validacao!!!']);
        }

        //senão, cria um utente
        $utente = utentes::create($data);

        //guardar a fotografia
        if ($request->hasFile('foto')) {
            $request->file('foto')->storeAs('public/images/utentes/', $utente->id . '.png');
        }

        return redirect('/inicio/lista_utentes'); //vai ser redirecionada para o 'index'

    }

    /**
     * Perfil do utente.
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
        $utente = utentes::find($utente->id);
        $utente->update($request->all());
        $utente->save();

        return redirect('/inicio/utente/' . $utente->id . '/?sucesso_alteraçao_utente=1');
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
        $utente->delete_foto_from_storage();
        return redirect('/inicio/lista_utentes');
        //return redirect('/inicio/lista_utentes/?sucesso_destroy_utente=1');
    }
}
