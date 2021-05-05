@extends('layouts.vertical')
@section('titulo', 'Stock ')
@section('content')

<div class="msg">
    <!-- mensagens de alerta -->
    <?php if (isset($_GET['sucesso_alteraçao_stock'])) { ?>
        <div style="width: 25%;  height:20%;  padding: 0.5rem;background-color: green;color:white; margin-top:0px; margin-bottom:20px;border-radius:0.5rem">
            <b>O stock foi alterado com sucesso!</b>
        </div>
    <?php } ?>
    <?php if (isset($_GET['sucesso_criar_produto'])) { ?>
        <div style="width: 28%;  height:20%;  padding: 0.5rem;background-color: green;color:white; margin-top:0px; margin-bottom:20px;border-radius:0.5rem">
            <b>Foi adicionado um produto com sucesso!</b>
        </div>
    <?php } ?>
    <?php if (isset($_GET['sucesso_delete_produto'])) { ?>
        <div style="width: 25%;  height:20%;  padding: 0.5rem;background-color: green;color:white; margin-top:0px; margin-bottom:20px;border-radius:0.5rem">
            <b>O produto foi eliminado com sucesso!</b>
        </div>
    <?php } ?>
</div>

<div class="add_produto">
    <a class="btn btn-success" style="margin-bottom:15px" href="{{ url('/inicio/produtos/create_produto')}}"><b>+ NOVO PRODUTO</b></a>
</div>
<div class="container" style="background-color:white;">
    <table class="table table-striped table-hover">

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
                <th scope="row">{{$produto->id}}</th>
                <td> {{$produto->nome_produto}} </td>
                <td> {{$produto->categoria}} </td>
                <td> {{$produto->quantidade}}</td>
                <td>{{$produto->reorder_point}} </td>

                <td>
                    <form action="{{ url('/inicio/produtos/destroy_produto/'. $produto->id)}}" method="POST">
                        <a class="btn btn-info" href="{{ url('/inicio/produtos/movimentos/' . $produto->id ) }}"><b>Ver Movimentos</b></a>
                        @csrf
                        <button type="submit" class="btn btn-danger"><b>Apagar produto</b></button>
                    </form>
                </td>
            </tr>
            <!--Se não fizer o que está dentro do for else faz o seguinte -->
            @empty
            <h5 class="text-center">Não foram encontrados Produtos!</h5>
            @endforelse
        </tbody>
    </table>
</div>

{!! $produtos->links('pagination::bootstrap-4') !!}
<?php
if (isset($_GET['sucesso_destroy_produto'])) { ?>
    <div style="width: 50%;  padding: 0.5rem;background-color:red;color:white; margin-top:0px;">
        O Produto {{$produto->nome_produto}} foi eliminado com sucesso!
    </div> <?php } ?>



@endsection