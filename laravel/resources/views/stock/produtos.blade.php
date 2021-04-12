@extends('layouts.vertical')
@section('titulo', 'Produtos')
@section('content')


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
    <!--forelse(frutarias as frutaria)-->
        <tr>
            <th scope="row">1</th>
            <td>Luvas</td>
            <td>EPI</td>
            <td>10 pacotes x 100</td>
            <td>5</td>
            <td>
              <!--  <form action="{ url('frutarias/destroy/'.$ frutaria->id) }" method="POST">-->
                    <a class="btn btn-info" href="{{ url('frutarias/show/') }}">Ver Movimentos</a> <!--$frutaria->id -->
                    <a class="btn btn-primary" href="{{ url('frutarias/edit/')}}">Editar stock</a><!--$frutaria->id -->
                    @csrf
                    <button type="submit" class="btn btn-danger">Apagar produto</button>
                </form>



            </td>
        </tr>

    </tbody>
</table>



@endsection