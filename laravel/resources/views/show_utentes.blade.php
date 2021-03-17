@extends('layouts.backend')
@section('content')

<h1> Utentes</h1>

<div class="row">
    <div class="imgbox" style=" margin-left:20px">
        <a href="{{url('/')}}">
            <img src="{{ asset('images/idosa0.jpg') }}" alt="utente" class="rounded-circle" style="width:150px; height:150px">
            <p style="margin-left:10px">Maria Rodrigues</p>
        </a>
    </div>
    <div class="imgbox" style=" margin-left:20px">
        <img src="{{ asset('images/idoso5.jpg') }}" alt="utente" class="rounded-circle" style="width:150px; height:150px;">
        <p style="margin-left:10px">Roberto Gomes</p>
    </div>
</div>


@endsection