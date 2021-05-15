<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use App\Models\produto;
use App\Models\stock_movimentos;
use Illuminate\Http\Request;

class StockMovimentosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $movimento = stock_movimentos::all();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(produto $produto)
    {
        return view('produtos.stock.create_movimentos', ['produto' => $produto]);
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, produto $produto)
    {
        $request->validate([
            'quantidade' => 'required|numeric',
            'product_id' => 'string'
        ]);
        $params = $request->all();

        $params['user_id'] =  Auth::user()->id;

        //dd($params);
        $movimento = stock_movimentos::create($params);
        $movimento->save();

        return redirect('/inicio/produtos/movimentos/' . $produto->id . '?sucesso_criar_movimento=1');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\stock_movimentos  $stock_movimentos
     * @return \Illuminate\Http\Response
     */
    public function show(stock_movimentos $stock_movimentos)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\stock_movimentos  $stock_movimentos
     * @return \Illuminate\Http\Response
     */
    public function edit(stock_movimentos $stock_movimentos)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\stock_movimentos  $stock_movimentos
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, stock_movimentos $stock_movimentos)
    {
        //
    }
    public static function destroy($stock_movimentos)
    {
        $stock_movimentos = new stock_movimentos();
        $stock_movimentos->delete();
    }
}
