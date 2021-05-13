<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Validator;
use App\Models\Contactos;
use App\Models\User;
use Illuminate\Http\Request;

class ContactosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $contactos = Contactos::all();
        $users = User::all();
        return view('info.contactos.lista_contactos')->with('contactos', $contactos)->with('users', $users);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('info.contactos.create_contacto');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'nome' => 'required|string|max:255',
            'numero' => 'required|numeric',

        ]);

        Contactos::create([
            'nome' => $request->nome,
            'numero' => $request->numero,

        ]);

        return redirect('/inicio/contactos/?sucesso_criar_contacto=1'); //vai ser redirecionada para o 'index'
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Contactos  $contactos
     * @return \Illuminate\Http\Response
     */
    public function show(Contactos $contacto)
    {
        return view('info.contactos.show_contacto')->with('contactos', $contacto); //dá o contacto com este ID
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Contactos  $contactos
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Contactos $contacto)
    {
        $contacto->nome =  $request->nome;
        $contacto->numero = $request->numero;
        $contacto->save();

        return redirect('/inicio/contactos/?sucesso_alteraçao_contacto=1');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Contactos  $contactos
     * @return \Illuminate\Http\Response
     */
    public function destroy(Contactos $contacto)
    {
        $contacto->delete();
        return redirect('/inicio/contactos/?sucesso_delete_contacto=1');
    }
}
