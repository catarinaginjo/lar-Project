@extends('layouts.vertical')
@section('titulo', 'Movimentos de Produto')
@section('content')


<div class="container" style="background-color:white;">
    <p>Caso haja saída de stock usar a notação " - ". Exemplo: -5</p>
    <table class="table table-striped table-hover">
        <thead class="thead-dark">
            <tr>
                <th scope="col">Nome Produto</th>
                <th scope="col">Quantidade</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            <form action="{{url('/inicio/produtos/' . $produto->id . '/store_movimento')}}" method="POST" style="font-weight:bold;">
                @csrf
                <input type="hidden" name="product_id" value="{{$produto->id}}">
                <tr>
                    <th scope="row">
                        <p>{{$produto->nome_produto}}</p>
                    </th>
                    <td> <input type="text" name="quantidade"> </td>
                    <td> <button type="submit" id="mybtn" class="btn btn-primary"><b>Adicionar movimento de stock a produto</b></button></td>
                </tr>
            </form>
            <!-- Gera mensagem de erro caso algum campo não esteja correto (relativamente as validações no controller)-->
            @if ($errors->any())
            <div class="alert alert-danger">
                <strong>UPS!</strong>Erro com os dados que forneceu.<br><br>
                <ul>
                    @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
            @endif
        </tbody>
    </table>
</div>


@endsection