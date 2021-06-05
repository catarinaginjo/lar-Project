<?php

namespace App\Http\Controllers\API;

use App\Models\produto;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProdutosApiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return response(['result' => produto::all()], 200);
    }

    public function getproduto()
    {
         //dd("cheguei aqui");

        $produto = produto::join('stock_movimentos', 'produto.id', '=', 'stock_movimentos.product_id')
            ->select('produto.*', 'stock_movimentos.quantidade')
            ->get();

      /*  $produto = DB::table('produto')
            ->join('stock_movimentos', 'produto.id', '=', 'stock_movimentos.product_id')
            ->select('produto.*', 'stock_movimentos.quantidade')
            ->get();*/


        return response(['result' => $produto], 201);
    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($categoria)
    {
        return    $produto = produto::where('categoria', '=', $categoria)->get();
    }
}
