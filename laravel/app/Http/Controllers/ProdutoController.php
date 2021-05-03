<?php

namespace App\Http\Controllers;

use App\Models\produto;
use Illuminate\Http\Request;

class ProdutoController extends Controller
{

    //Considero Produtos: alimentos e equipamentos variados - distinguem-se pela categoria.
    /* Produtor */
    public function lista_produtos()
    {
        $produtos = produto::paginate(2);
        return view('produtos.stock.lista_produtos', ['produtos' => $produtos]);
    }

    public function create_produto(produto $produto)
    {
        return view('produtos.stock.create_produtos', ['produto' => $produto]);
    }

    /**
     * Faz update da quantidade do produto em stock_movimentos
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\produto  $produto
     * @return \Illuminate\Http\Response
     */
    public function produtos_update(Request $request, produto $produto)
    {
        //
    }


    //guardar produto dentro da tabela 'produto'
    public function store(Request $request)
    {
        $request->validate([
            'nome_produto' => 'required|string',
            'categoria' => 'required|string',
            'reorder_point' => 'numeric',
        ]);
        $produto = new produto;
        produto::create($request->all());

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
        return view('produtos.stock.show_movimentos');
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
        return redirect('/inicio/stock/produtos/?sucesso_delete_produto=1');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\produto  $produto
     * @return \Illuminate\Http\Response
     */
    public function edit(produto $produto)
    {
        //
    }

}
