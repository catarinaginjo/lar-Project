@extends('layouts.vertical')
@section('titulo', 'Movimentos de Produto')
@section('content')


<table class="table table-secondary">
    <thead class="thead-dark">
        <tr>
            <th scope="col">Nome Produto</th>
            <th scope="col">Quantidade</th>
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
                <button type="submit" id="mybtn" style="margin-bottom:10px" class="btn btn-primary"><b>Adicionar movimento de stock a produto</b></button>
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


@endsection