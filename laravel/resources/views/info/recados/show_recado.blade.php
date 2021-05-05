<link href="{{ url('css/ver_recado.css') }}" rel="stylesheet">
@extends('layouts.vertical')

@section('titulo', 'Recado - vista geral')
@section('content')

<div class="edit-recado" style="margin-left:200px; margin-top:30px;">
    <form action="/inicio/recados/update/{{$recado->id}}" method="POST" id="alterar-recado" class="input-grouphideBox">
        {{ csrf_field() }}
        <p>Assunto: </p>
        <textarea name="assunto" name="assunto" style="width:300px; height:150px" <?php echo !empty($_GET['editar']) ? '' : 'disabled' ?> required class="text-name"> {{$recado->assunto}}</textarea>
        <p>Responsável: </p>
        <textarea name="responsavel" name="responsavel" style="width:300px; height:150px" <?php echo !empty($_GET['editar']) ? '' : 'disabled' ?> required class="text-name"> {{$recado->responsavel}}</textarea>
        <p>Descrição do recado: </p>
        <textarea name="descriçao" name="descriçao" style="width:300px; height:150px" <?php echo !empty($_GET['editar']) ? '' : 'disabled' ?> required class="text-name"> {{$recado->descriçao}}</textarea>

        <!--Botões-->
        <div class="botoes">
            <?php if (!isset($_GET['editar'])) { ?>
                <a class="btn btn-primary" href="?editar=1"> <b>Editar</b></a>
            <?php } else { ?>
                <input type="submit" class="btn btn-primary" style="font-weight:bold" name="save" value="Guardar" id="save">
            <?php } ?>
        </div>
    </form>
</div>
@endsection