<link href="{{ url('css/ementa.css') }}" rel="stylesheet">

@extends('layouts.backend')
@section('content')

<h1> PERFIL DE UTENTE </h1>
<p>DADOS</p>

<!-- Tabela Dados utente -->
@include('includes.dadosTable')

<!-- Tabela visualização de tarefas-->
@include('includes.tarefasTable')


@endsection