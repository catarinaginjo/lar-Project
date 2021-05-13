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
    <a class="btn btn-success" href="{{ url('/inicio/superadmin/lista-funcionarios/create')}}"> <b>+ CRIAR FUNCIONÁRIOS/ADMINISTRADORES</b></a>
</div>
@endif

@if(Auth::user()->cargo =='Administrador')
<div class="add_utente">
    <a class="btn btn-success" href="{{ url('/inicio/funcionarios/create_funcionario')}}"> <b>+ CRIAR FUNCIONÁRIO</b></a>
</div>
@endif


<div class="myFuncionario" style="margin-top:50px">

    @if(Auth::user()->cargo =='SuperAdmin')
    <div class="mydiv">
        <h1 style="font-size:30px">Administradores </h1>
        <div class="row" style="margin-left:25px;">
            @foreach($user as $us)
            @if($us->cargo == 'Administrador')
            <div class="imgbox">
                <a href="{{url('/inicio/funcionarios/' . $us->id)}}">
                    <img src="{{ $us->foto() }}" alt="fotografia do utilizador" class="rounded-circle" style="width:170px; height:170px">
                    <p style="margin-left:13px; font-size:20px; color:white">{{$us->nome}} {{$us->apelido}}</p>
                    <!--<p style="margin-left:13px; font-size:20px; color:white">{{$us->cargo}}</p> -->
                </a>
            </div>
            @endif
            @endforeach
        </div>
    </div>
    @endif


    <div class="mydiv">
        <h1 style="font-size:30px">Auxiliares </h1>
        <div class="row" style="margin-left:25px;">
            @foreach($user as $us)
            @if($us->cargo == 'Auxiliar')
            <div class="imgbox">
                <a href="{{url('/inicio/funcionarios/' . $us->id)}}">
                    <img src="{{ $us->foto() }}" alt="fotografia do utilizador" class="rounded-circle" style="width:170px; height:170px">
                    <p style="margin-left:13px; font-size:20px; color:white">{{$us->nome}} {{$us->apelido}}</p>
                     <!-- <p style="margin-left:13px; font-size:20px; color:white">{{$us->cargo}}</p>-->
                </a>
            </div>
            @endif
            @endforeach
        </div>
    </div>


    <div class="mydiv">
        <h1 style="font-size:30px"> Cozinheiros </h1>
        <div class="row" style="margin-left:25px;">
            @foreach($user as $us)
            @if($us->cargo == 'Cozinheiro')
            <div class="imgbox">
                <a href="{{url('/inicio/funcionarios/' . $us->id)}}">
                    <img src="{{ $us->foto() }}" alt="fotografia do utilizador" class="rounded-circle" style="width:170px; height:170px">
                    <p style="margin-left:13px; font-size:20px; color:white">{{$us->nome}} {{$us->apelido}}</p>
                     <!-- <p style="margin-left:13px; font-size:20px; color:white">{{$us->cargo}}</p>-->
                </a>
            </div>
            @endif
            @endforeach
        </div>
    </div>

    <div class="mydiv">
        <h1 style="font-size:30px">Super administradores </h1>
        <div class="row" style="margin-left:25px;">
            @foreach($user as $us)
            @if($us->cargo == 'SuperAdmin')
            <div class="imgbox">
                <a href="{{url('/inicio/funcionarios/' . $us->id)}}">
                    <img src="{{ $us->foto() }}" alt="fotografia do utilizador" class="rounded-circle" style="width:170px; height:170px">
                    <p style="margin-left:13px; font-size:20px; color:white">{{$us->nome}} {{$us->apelido}}</p>
                   <!-- <p style="margin-left:13px; font-size:20px; color:white">{{$us->cargo}}</p>-->
                </a>
            </div>
            @endif
            @endforeach
        </div>
    </div>


</div>



@endsection

<style>
    h1 {
        font-size: 10px;
    }

    .mydiv{
        margin-bottom:30px;
        margin-top:15px;
    }

    .imgBox{
        margin-left:20px;

    }
</style>