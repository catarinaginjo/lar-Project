@extends('layouts.vertical')
@section('titulo', 'Lista de Ementas')
@section('content')

<?php
if (isset($_GET['sucesso_delete_ementa'])) { ?>
    <div style="width: 27%; height:40px; padding: 0.5rem;background-color:green;color:white; margin-bottom:20px; ;border-radius:0.5rem">
        <b>A ementa foi eliminada com sucesso.</b>
    </div>
<?php }
if (isset($_GET['sucesso_criar_ementa'])) { ?>
    <div style="width: 25%; height:40px; padding: 0.5rem;background-color:green;color:white; margin-bottom:20px;;border-radius:0.5rem">
        <b> A ementa foi criada com sucesso.</b>
    </div>
<?php } ?>
<div class="btn">
    <a class="btn btn-success" style="margin-bottom:10px;" href="/inicio/ementa/create-ementa"><b>+ NOVA EMENTA </b></a>
</div>


@foreach($ementas as $ementa)

<div>
    <a href="{{url('/inicio/lista-ementas/show/' . $ementa->id)}}">
        <p style="font-weight:bold; color:black">Ementa do dia {{$ementa->data_inicio }} ao dia {{$ementa->data_fim}} </p>
    </a>

</div>


@endforeach

@endsection