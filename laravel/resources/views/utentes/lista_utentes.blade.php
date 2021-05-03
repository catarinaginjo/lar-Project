<link href="{{ url('css/button.css') }}" rel="stylesheet">
@extends('layouts.vertical')
@section('titulo', 'Lista de Utentes')
@section('content')

<?php
if (isset($_GET['sucesso_destroy_utente'])) { ?>
    <div style="width: 25%; height:40px; padding: 0.5rem;background-color:green;color:white; margin-bottom:20px;border-radius:0.5rem">
       <b> O utente foi eliminado com sucesso.</b>
    </div>
<?php } 
if (isset($_GET['sucesso_criar_utente'])) { ?>
    <div style="width: 25%; height:40px; padding: 0.5rem;background-color:green;color:white; margin-bottom:20px;border-radius:0.5rem">
        <b> O utente foi criado com sucesso.</b>
    </div>
<?php } ?>



<div class="add_utente">
    <a class="btn btn-success" href="{{ url('/inicio/create_utente')}}"><b>+ CRIAR UTENTE</b></a>
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