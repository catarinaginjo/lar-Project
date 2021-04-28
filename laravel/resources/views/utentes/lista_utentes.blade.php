<link href="{{ url('css/button.css') }}" rel="stylesheet">
@extends('layouts.vertical')
@section('titulo', 'Lista de Utentes')
@section('content')

<div class="add_utente">
    <a class="btn btn-success" href="{{ url('/inicio/create_utente')}}"><b>+ Criar Utente</b></a>
</div>


<div class="myUtente" style="margin-top:50px">
    @foreach($utentes as $utente)
    <div class="row" style="margin-left:25px;">
        <div class="imgbox">
            <a href="{{url('/inicio/utente/' . $utente->id)}}">
                <img src="{{ $utente->foto() }}" alt="utente" class="rounded-circle" style="width:170px; height:170px">
                <p style="margin-left:13px; font-size:20px; color:white">{{$utente->nome}} {{$utente->apelido}}</p>          
            </a>
        </div>
        @endforeach
    </div>
</div>


@endsection