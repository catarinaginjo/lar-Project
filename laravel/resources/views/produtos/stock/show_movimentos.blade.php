@extends('layouts.vertical')
@section('titulo', 'Movimentos de Produto')
@section('content')



<form action="/inicio/funcionarios/update/{{$user->id}}" method="POST">
<table class="table table-secondary">
    <thead class="thead-dark">
        <tr>
            <th scope="col">Nome Produto</th>
            <th scope="col">Quantidade atual</th>
            <th scope="col">Funcionária</th>
            <th scope="col">Data de alteração</th>
            <th scope="col"> </th>


        </tr>
    </thead>
    <tbody>
        @forelse($movimentos as $produto)
        <tr>
            <th scope="row">{{$produto->nome_produto}}</th>
            <td> <input type="text" name="quantidade" value="{{$produto->quantidade}}" <?php echo !empty($_GET['editar']) ? '' : 'disabled' ?>> </td>
            <td> {{$produto->user_id}}</td>
            <td>{{$produto->updated_at}} </td>
            <td>
                <form action="{ url('/inicio/produtos/update_produto/'. $produto->id) }" method="POST">
                    <a class="btn btn-info" href="{{ url('/inicio/produtos/movimentos/' . $produto->id)}}">Ver Movimentos</a>
                    @csrf
                    <button type="submit" class="btn btn-danger">Guardar produto</button>
                </form>


            </td>
        </tr>

        <!--Se não fizer o que está dentro do for else faz o seguinte -->
        @empty
        <h5 class="text-center">Não foram encontrados movimentos deste Produto!</h5>
        @endforelse
    </tbody>
</table>


@endsection