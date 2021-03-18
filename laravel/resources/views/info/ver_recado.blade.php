@extends('layouts.backend')
@section('content')


<h1>Vista Geral</h1>
<p>Assunto: </p>
<p>Data do Recado: </p>
<p>Responsável: </p>

<textarea id="recado"></textarea>

<div class="botoes">
    <button type="submit" id="btn" class="btn btn-warning">Editar</button>
    <button type="submit" id="btn" class="btn btn-success">Guardar</button>
</div>
@endsection

<style>
    #recado {
        width: 500px;
        height: 200px;
    }

    h1 {
        margin-left: 420px;
    }

    p {
        font-weight: bold;
        font-size: 20px;
    }

    #btn {
        font-weight: bold;
        margin-top: 40px;
        float: left;
        margin-left: 15px;
    }

    .botoes{
        margin-top:10px;
    }
</style>