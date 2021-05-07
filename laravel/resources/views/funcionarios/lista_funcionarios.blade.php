<link href="{{ url('css/button.css') }}" rel="stylesheet">
@extends('layouts.vertical')
@section('titulo', 'Lista de Funcionários')
@section('content')

<?php
if (isset($_GET['sucesso_destroy_utilizador'])) { ?>
    <div style="width: 27%; height:40px; padding: 0.5rem;background-color:green;color:white; margin-bottom:20px; ;border-radius:0.5rem">
        <b>O utilizador foi eliminado com sucesso.</b>
    </div>
<?php }
if (isset($_GET['sucesso_criar_utilizador'])) { ?>
    <div style="width: 25%; height:40px; padding: 0.5rem;background-color:green;color:white; margin-bottom:20px;;border-radius:0.5rem">
        <b> O utilizador foi criado com sucesso.</b>
    </div>
<?php } ?>


@if(Auth::user()->cargo =='SuperAdmin')
<div class="add_admin">
    <a class="btn btn-danger" href="{{ url('/inicio/superadmin/lista-funcionarios/create')}}"> <b>+ CRIAR ADMINISTRADOR</b></a>
</div>
@endif

<div class="add_utente">
    <a class="btn btn-success" href="{{ url('/inicio/funcionarios/create_funcionario')}}"> <b>+ CRIAR FUNCIONÁRIO</b></a>
</div>



<div class="myFuncionario" style="margin-top:50px">
    @foreach($user as $us)
    <div class="row" style="margin-left:25px;">
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



@endsection