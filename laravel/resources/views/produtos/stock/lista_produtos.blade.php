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
    <h1>Tabela de produtos</h1>
    <table class="table table-striped table-hover" id="tabela-produtos">

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
            @foreach($produtos as $produto)
            @if($produto->categoria == 'Equipamentos')
            <tr>
                <th scope="row">{{$produto->id}}</th>
                <td> {{$produto->nome_produto}} </td>
                <td> {{$produto->categoria}} </td>
                <td> {{$produto->getQuantidade()}}</td>
                <td>{{$produto->reorder_point}} </td>

                <td>
                    <form action="{{ url('/inicio/produtos/destroy_produto/'. $produto->id)}}" method="POST">
                        <a class="btn btn-info" href="{{ url('/inicio/produtos/movimentos/' . $produto->id ) }}"><b>Ver Movimentos</b></a>
                        @csrf
                        <button type="submit" class="btn btn-danger"><b>Apagar produto</b></button>
                    </form>
                </td>
            </tr>
            @endif
            @endforeach
        </tbody>
    </table>

    <hr>

    <h1>Tabela de alimentos</h1>
    <table class="table table-striped table-hover" id="tabela-produtos">

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
            @foreach($produtos as $produto)

            @if($produto->categoria == 'Alimentação')
            <tr>
                <th scope="row">{{$produto->id}}</th>
                <td> {{$produto->nome_produto}} </td>
                <td> {{$produto->categoria}} </td>
                <td> {{$produto->getQuantidade()}}</td>
                <td>{{$produto->reorder_point}} </td>

                <td>
                    <form action="{{ url('/inicio/produtos/destroy_produto/'. $produto->id)}}" method="POST">
                        <a class="btn btn-info" href="{{ url('/inicio/produtos/movimentos/' . $produto->id ) }}"><b>Ver Movimentos</b></a>
                        @csrf
                        <button type="submit" class="btn btn-danger"><b>Apagar produto</b></button>
                    </form>
                </td>
            </tr>
            @endif
            @endforeach
        </tbody>
    </table>


    <hr>
    <h1>Tabela de produtos de higiene</h1>
    <table class="table table-striped table-hover" id="tabela-produtos">

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
            @foreach($produtos as $produto)

            @if($produto->categoria == 'Higiene')
            <tr>
                <th scope="row">{{$produto->id}}</th>
                <td> {{$produto->nome_produto}} </td>
                <td> {{$produto->categoria}} </td>
                <td> {{$produto->getQuantidade()}}</td>
                <td>{{$produto->reorder_point}} </td>

                <td>
                    <form action="{{ url('/inicio/produtos/destroy_produto/'. $produto->id)}}" method="POST">
                        <a class="btn btn-info" href="{{ url('/inicio/produtos/movimentos/' . $produto->id ) }}"><b>Ver Movimentos</b></a>
                        @csrf
                        <button type="submit" class="btn btn-danger"><b>Apagar produto</b></button>
                    </form>
                </td>
            </tr>
            @endif
            @endforeach
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