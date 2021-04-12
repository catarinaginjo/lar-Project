<link href="{{ url('css/button.css') }}" rel="stylesheet">
@extends('layouts.vertical')
@section('titulo', 'Lista de Utentes')
@section('content')

<div class="add_utente">
    <a class="btn btn-success" href="{{ url('/inicio/create_utente')}}">ADICIONAR NOVO UTENTE</a>
</div>


<div class="myUtente" style="margin-top:50px">
    @foreach($utentes as $utente)
    <div class="row" style="margin-left:10px;">
        <div class="imgbox" style="background-color:white">
            <a href="{{url('/inicio/utente/' . $utente->id)}}">
                <img src="{{ asset('images/idosa0.jpg') }}" alt="utente" class="rounded-circle" style="width:150px; height:150px">
                <p style="margin-left:13px; font-size:20px; color:white">{{$utente->nome}} {{$utente->apelido}}</p>
                
            </a>
        </div>
        @endforeach
    </div>
</div>


@endsection