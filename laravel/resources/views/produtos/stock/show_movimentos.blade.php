@extends('layouts.vertical')
@section('titulo', 'Movimentos de Produto')
@section('content')


<div class="msg">
    <!-- mensagens de alerta -->
    <?php if (isset($_GET['sucesso_criar_movimento'])) { ?>
        <div style="width: 30%;  height:20%;  padding: 0.5rem;background-color: green;color:white; margin-top:0px; margin-bottom:20px;border-radius:0.5rem">
            <b>A quantidade do produto foi alterada com sucesso!</b>
        </div>
    <?php } ?>

</div>

<div class="add_utente">
    <a class="btn btn-primary" href="{{ url('/inicio/produtos/' . $produto->id . '/create/')}}" style="margin-bottom:20px"> <b>+ Criar movimento de produto</b></a>
</div>

<div style="background-color:white; width:26%; border-radius:0.5rem;  border: 2px solid red; margin-bottom:15px">
    <h1> Quantidade atual: {{$quantidade_atual}}</h1>
</div>

<div class="container" style="background-color:white;">
<table class="table table-striped table-hover">
    <thead class="thead-dark">
        <tr>
            <th scope="col">Nome Produto</th>
            <th scope="col">Quantidade alterada</th>
            <th scope="col">Funcionária</th>
            <th scope="col">Data de alteração</th>
        </tr>
    </thead>
    <tbody>
        @forelse($movimentos as $movimento)
        <tr>
            <th scope="row">{{$produto->nome_produto}}</th>
            <td>{{$movimento->quantidade}}</td>
            <td>{{$movimento->getResponsavel()->nome}} {{$movimento->getResponsavel()->apelido}}</td>
            <td>{{$movimento->updated_at}} </td>
        </tr>

        <!--Se não fizer o que está dentro do for else faz o seguinte -->
        @empty
        <h5 class="text-center">Não foram encontrados movimentos deste Produto!</h5>
        @endforelse
    </tbody>
</table>
</div>


@endsection