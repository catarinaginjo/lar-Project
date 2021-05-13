<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
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
        $request->validate([
            'assunto' => 'required|string|max:255',
            'descriçao' => 'required|string|max:255',
            'responsavel' => 'string|max:255',
        ]);

        $params = $request->all();
        $params['responsavel'] =  Auth::user()->id;
        //dd($params);
        $recado = recado::create($params);
        $recado->save();

        return redirect('/inicio/recados'); 
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\recado  $recado
     * @return \Illuminate\Http\Response
     */
    public function show(recado $recado)
    {
        return view('info.recados.show_recado')->with('recado', $recado); //dá o recado com este ID

    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\recado  $recado
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, recado $recado)
    {
        $recado->assunto = $request->assunto;
        $recado->descriçao = $request->descriçao;
        $recado->responsavel = $request->responsavel;
        $recado->save();

        return redirect('/inicio/recados/show/' . $recado->id . '/?sucesso_alteraçao_recado=1');
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
        return redirect('/inicio/recados/?sucesso_delete_recado=1');
    }
}
