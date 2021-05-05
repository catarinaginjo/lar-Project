@extends('layouts.vertical')
@section('titulo', 'Movimentos de Produto')
@section('content')

    <table class="table table-secondary">
        <thead class="thead-dark">
            <tr>
                <th scope="col">Nome Produto</th>
                <th scope="col">Quantidade retirada</th>
                <th scope="col">Quantidade atual</th>
                <th scope="col">Funcionária</th>
                <th scope="col">Data de alteração</th>
            </tr>
        </thead>
        <tbody>
            @forelse($movimentos as $produto)
            <tr>
                <th scope="row">{{$produto->nome_produto}}</th>
                <td>{{$produto->nome_produto}}</td>
                <td>Old Quantidade - quantidade atual </td>
                <td>{{$produto->quantidade}}</td>
                <td> {{$produto->user_id}}</td>
                <td>{{$produto->updated_at}} </td>
            </tr>

            <!--Se não fizer o que está dentro do for else faz o seguinte -->
            @empty
            <h5 class="text-center">Não foram encontrados movimentos deste Produto!</h5>
            @endforelse
        </tbody>
    </table>


    @endsection