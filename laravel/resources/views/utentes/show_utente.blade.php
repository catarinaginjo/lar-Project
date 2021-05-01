<link href="{{ url('css/ementa.css') }}" rel="stylesheet">

@extends('layouts.vertical')
@section('titulo', 'Perfil de Utente')
@section('content')

<!-- mensagens de alerta -->
<?php if (isset($_GET['sucesso_alteraçao_utente'])) { ?>
    <div style="width: 30%;  height:20%;  padding: 0.5rem;background-color: green;color:white; margin-top:0px; margin-bottom:20px">
        O Perfil do utente foi alterado com sucesso!
    </div>
<?php } ?>

<!-- Tabela Dados utente -->
@include('includes.dadosTable')

<!-- Tabela visualização de tarefas-->
@include('includes.tarefasTable')


@endsection