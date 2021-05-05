<?php

namespace App\Http\Controllers;

use App\Models\controlo_mp;
use Illuminate\Http\Request;

class ControloMpController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $controlos = controlo_mp::paginate(10);
        return view('produtos.materias-primas.lista_controlo_MP')->with('controlos', $controlos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('produtos.materias-primas.create_mp');
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
            'fornecedor' => 'string',
            'nome_produto' =>'string',
            'data_receçao'=>'date',
            'num_fatura' => 'numeric',
            'lote' => 'numeric',
            'aspeto' => 'string',
            'higiene' => 'string',
            'peso' => 'numeric|min:0',
            'data_val' => 'string',
            'temperatura' => 'string',
            'açoes_corretivas' => 'string',
        ]);
    
        $controlo_mp = new controlo_mp;
        controlo_mp::create($request->all());
        $controlo_mp->save();

        return redirect('/inicio/controlo_materias_primas' . $controlo_mp->id . '?sucesso_criar_dados=1');
    }



    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\controlo_mp  $controlo_mp
     * @return \Illuminate\Http\Response
     */
    public function destroy(controlo_mp $controlo_mp)
    {
        $controlo_mp->delete();
        return redirect('/inicio/controlo_materias_primas/?sucesso_delete_dados=1)');
    }
}
