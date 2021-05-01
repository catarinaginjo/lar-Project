@extends('layouts.vertical')
@section('titulo', 'Stock - Produtos')
@section('content')


<div class="add_produto">
    <a class="btn btn-success" style="margin-bottom:15px" href="{{ url('/inicio/create_produto')}}"><b>+ Novo Produto</b></a>
</div>

<div class="msg">
    <!-- mensagens de alerta -->
    <?php if (isset($_GET['sucesso_alteraçao_stock'])) { ?>
        <div style="width: 30%;  height:20%;  padding: 0.5rem;background-color: green;color:white; margin-top:0px; margin-bottom:20px">
            O stock foi alterado com sucesso!
        </div>
    <?php } ?>
</div>

<table class="table table-secondary">

    <thead class="thead-dark">
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Nome</th>
            <th scope="col">Categoria</th>
            <th scope="col">Quantidade atual</th>
            <th scope="col">Re-order point</th>
            <th scope="col">Opções</th>

        </tr>
    </thead>
    <tbody>
        @forelse($produtos as $produto)
        <tr>
            <th scope="row">{{$produto->id}} <?php echo !empty($_GET['editar']) ? '' : 'disabled' ?> </th>
            <td> <input type="text" name="nome_produto" value="{{$produto->nome_produto}}" <?php echo !empty($_GET['editar']) ? '' : 'disabled' ?>> </td>
            <td> <input type="text" name="categoria" value="{{$produto->categoria}}" <?php echo !empty($_GET['editar']) ? '' : 'disabled' ?>> </td>
            <td> <input type="text" name="nome_produto" value="{{$produto->nome_produto}}" <?php echo !empty($_GET['editar']) ? '' : 'disabled' ?>> </td>
            <td> - </td>
            <!-- quantidade está na tabela do stock_movimentos
            <td> <input type="text" name="quantidade" value="{{$produto->quantidade}}" <?php echo !empty($_GET['editar']) ? '' : 'disabled' ?>> </td>-->
            <td> <input type="number" name="reorder_point" value="{{$produto->reorder_point}}" <?php echo !empty($_GET['editar']) ? '' : 'disabled' ?>> </td>

            <td>
                <form action="{ url('/inicio/destroy_produto/'. $produto->id) }" method="POST">
                    <a class="btn btn-info" href="{{ url('/inicio/movimentos/produto/' . $produto->id ) }}">Ver Movimentos</a>
                    @csrf
                    <button type="submit" class="btn btn-danger">Apagar produto</button>
                </form>
            </td>
        </tr>
        <!--Se nao fizer o que está dentro do for else faz o seguinte -->
        @empty
        <h5 class="text-center">Não foram encontrados Produtos!</h5>
        @endforelse
    </tbody>
</table>

<!-- significa que há código -->
{!! $produtos->links('pagination::bootstrap-4') !!}
<?php
if (isset($_GET['sucesso_destroy_produto'])) { ?>
    <div style="width: 50%;  padding: 0.5rem;background-color:red;color:white; margin-top:0px;">
        O Produto {{$produto->nome_produto}} foi eliminado com sucesso!
    </div> <?php } ?>



@endsection