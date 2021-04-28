<link href="{{ url('css/button.css') }}" rel="stylesheet">
@extends('layouts.vertical')
@section('titulo', 'Lista de Funcionários')
@section('content')

<div class="add_utente">
    <a class="btn btn-success" href="{{ url('/inicio/funcionarios/create_funcionario')}}"><b>ADICIONAR NOVO FUNCIONÁRIO</b></a>
</div>


<div class="myFuncionario">
    @foreach($user as $us)
    <div class="row" style="margin-left:10px; margin-top:50px">
        <div class="imgbox" style=" margin-left:20px">
            <a href="{{url('/inicio/funcionarios/' . $us->id)}}">
                <img src="{{ $us->foto() }}" alt="utente" class="rounded-circle" style="width:150px; height:150px">
                <p style="margin-left:13px; font-size:20px; color:white">{{$us->nome}} {{$us->apelido}}</p>
                <p style="margin-left:13px; font-size:20px; color:white">{{$us->cargo}}</p>         
            </a>
        </div>
        @endforeach
    </div>
</div>


@endsection