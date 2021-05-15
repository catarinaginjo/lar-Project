<?php

namespace App\Http\Controllers;

use App\Models\stock_movimentos;
use App\Models\produto;
use Illuminate\Support\Facades\Auth;
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
            'reorder_point' => 'numeric',
        ]);
        $produto = produto::create($request->all());
        $produto->save();

        if ($produto->id < 1) {
            echo  'Produto não foi criado.';
            return;
        }
        $movimento = new stock_movimentos();
        $movimento->quantidade = $request['quantidade'];
        $movimento->product_id = $produto->id;
        $movimento->user_id = Auth::user()->id;
        $movimento->save();

        return redirect('/inicio/stock/produtos?sucesso_criar_produto=1');
    }

    /**
     * Mostra um determinado produto
     *
     * @param  \App\Models\produto  $produto
     * @return \Illuminate\Http\Response
     */
    public function show_movimentos(produto $produto)
    {
        $movimentos = stock_movimentos::orderBy('created_at', 'desc')->get()->where('product_id', '=', $produto->id);
        $quantidade_atual = $movimentos->sum('quantidade');
        $movimentos = $movimentos->all();
        // die(var_dump($movimentos));

        return view('produtos.stock.show_movimentos', array(
            'movimentos' => $movimentos, 
            'produto' => $produto,
            'quantidade_atual' => $quantidade_atual
        ));
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
