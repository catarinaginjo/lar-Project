<link href="{{ url('css/ementa.css') }}" rel="stylesheet">

@extends('layouts.vertical')
@section('titulo', 'Perfil de Utente')
@section('content')


<!-- Tabela Dados utente -->
@include('includes.dadosTable')

<!-- Tabela visualização de tarefas-->
@include('includes.tarefasTable')


@endsection