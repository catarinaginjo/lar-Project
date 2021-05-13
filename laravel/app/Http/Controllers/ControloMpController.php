<?php

namespace App\Http\Controllers;

use App\Models\controlo_mps;

use Illuminate\Support\Facades\Auth;
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
        $controlos = controlo_mps::paginate(10);
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
            'fornecedor' => 'string|required',
            'nome_produto' => 'string|required',
            'data_receçao' => 'date|required',
            'num_fatura' => 'numeric|required',
            'lote' => 'numeric|nullable',
            'aspeto' => 'string|required',
            'higiene' => 'string|required',
            'peso' => 'numeric|min:0|nullable',
            'data_val' => 'string|required',
            'temperatura' => 'string|nullable',
            'açoes_corretivas' => 'string|nullable',
        ]);
        $params = $request->all();

        $params['responsavel'] =  Auth::user()->id;

        //dd($params);
        $controlo_mp = controlo_mps::create($params);

        $controlo_mp->save();

        return redirect('/inicio/controlo_materias_primas?sucesso_criar_dados=1');
        //return redirect('/inicio/controlo_materias_primas' . $controlo_mp->id . '?sucesso_criar_dados=1');
    }



    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\controlo_mp  $controlo_mp
     * @return \Illuminate\Http\Response
     */
    public function destroy(controlo_mps $controlo_mp)
    {   
        $controlo_mp->delete();
        return redirect('/inicio/controlo_materias_primas/?sucesso_delete_dados=1');
    }
}
