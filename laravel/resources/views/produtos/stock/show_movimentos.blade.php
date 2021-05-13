@extends('layouts.vertical')
@section('titulo', 'Movimentos de Produto')
@section('content')

<div class="add_utente">
    <a class="btn btn-success" href="{{ url('/inicio/produtos/' . $produto->id . '/create/')}}" style="margin-bottom:20px"> <b>+ Criar movimento de produto</b></a>
</div> 
    <table class="table table-secondary">
        <thead class="thead-dark">
            <tr>
                <th scope="col">Nome Produto</th>
                <th scope="col">Quantidade atual</th>
                <th scope="col">Quantidade retirada</th>
                <th scope="col">Funcionária</th>
                <th scope="col">Data de alteração</th>
            </tr>
        </thead>
        <tbody>
            @forelse($movimentos as $movimento)
            <tr>
                <th scope="row">{{$produto->nome_produto}}</th>
                <td> {{$produto->quantidade}} </td>
                <td>{{$movimento->quantidade_alterada}}</td>
                <td>{{$movimento->getResponsavel()->nome}} {{$movimento->getResponsavel()->apelido}}</td>
                <td>{{$movimento->updated_at}} </td>
            </tr>

            <!--Se não fizer o que está dentro do for else faz o seguinte -->
            @empty
            <h5 class="text-center">Não foram encontrados movimentos deste Produto!</h5>
            @endforelse
        </tbody>
    </table>


    @endsection