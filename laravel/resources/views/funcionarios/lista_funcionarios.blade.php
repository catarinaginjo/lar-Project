<link href="{{ url('css/button.css') }}" rel="stylesheet">
@extends('layouts.vertical')
@section('titulo', 'Lista de Funcionários')
@section('content')

<div class="add_utente">
    <a class="btn btn-success" href="{{ url('/inicio/funcionarios/create_funcionario')}}"><b>ADICIONAR NOVO FUNCIONÁRIO</b></a>
</div>


<div class="myFuncionario"  style="margin-top:50px">
    @foreach($user as $us)
    <div class="row"  style="margin-left:25px;">
        <div class="imgbox">
            <a href="{{url('/inicio/funcionarios/' . $us->id)}}">
                <img src="{{ $us->foto() }}" alt="fotografia do utilizador" class="rounded-circle" style="width:170px; height:170px">
                <p style="margin-left:13px; font-size:20px; color:white">{{$us->nome}} {{$us->apelido}}</p>
                <p style="margin-left:13px; font-size:20px; color:white">{{$us->cargo}}</p>         
            </a>
        </div>
        @endforeach
    </div>
</div>


<?php
if (isset($_GET['sucesso_destroy_utilizador'])) { ?>
    <div style="width: 100%; height:40px; padding: 0.5rem;background-color:red;color:white; margin-bottom:20px">
        O utilizador foi eliminado com sucesso.
    </div>
<?php } ?>


@endsection