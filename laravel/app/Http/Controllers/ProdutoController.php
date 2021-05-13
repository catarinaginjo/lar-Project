<?php

namespace App\Http\Controllers;

use App\Models\stock_movimentos;
use App\Models\produto;
use Illuminate\Http\Request;

class ProdutoController extends Controller
{

    /* Produtos */
    public function lista_produtos()
    {
        $produtos = produto::paginate(10);
        return view('produtos.stock.lista_produtos', ['produtos' => $produtos]);
    }

    public function create_produto(produto $produto)
    {
        return view('produtos.stock.create_produtos', ['produto' => $produto]);
    }


    //guardar produto dentro da tabela 'produto'
    public function store(Request $request)
    {
        $request->validate([
            'nome_produto' => 'required|string',
            'categoria' => 'required|string',
            'quantidade' => 'required|numeric',
            'reorder_point' => 'numeric',
        ]);
        $produto = new produto;
        produto::create($request->all());

        //adicionamos um movimento a esse produto
        $movimento = new stock_movimentos();
        //$movimento->user_id = 

        //  $recado->descriçao = $request->descriçao;

        return redirect('/inicio/stock/produtos' . $produto->id . '?sucesso_criar_produto=1');
    }

    /**
     * Mostra um determinado produto
     *
     * @param  \App\Models\produto  $produto
     * @return \Illuminate\Http\Response
     */
    public function show_movimentos(produto $produto)
    {
        $movimentos = stock_movimentos::get()->where('product_id', '=', $produto->id)->all();
        // die(var_dump($movimentos));

        return view('produtos.stock.show_movimentos', array('movimentos' => $movimentos, 'produto' => $produto));
    }

    /**
     * Remove um produto da tabela produto
     *
     * @param  \App\Models\produto  $produto
     * @return \Illuminate\Http\Response
     */
    public function destroy(produto $produto)
    {
        $produto->delete();
        $movimento = stock_movimentos::get()->where('product_id', '=', $produto->id)->all();
        //$movimento->delete();

        StockMovimentosController::destroy($movimento);
        return redirect('/inicio/stock/produtos/?sucesso_delete_produto=1');
    }
}
