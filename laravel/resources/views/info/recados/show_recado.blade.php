<link href="{{ url('css/ver_recado.css') }}" rel="stylesheet">
@extends('layouts.vertical')

@section('titulo', 'Recado - vista geral')
@section('content')

<div class="edit-recado" style="margin-left:200px; margin-top:-30px">
    <form action="/inicio/recados/update/{{$recados->id}}" method="POST" id="alterar-recado" class="input-grouphideBox">
        {{ csrf_field() }}
        <p>Assunto: </p>
        <input type="text" name="assunto" value="{{$recados->assunto}}" style="width:100px" <?php echo !empty($_GET['editar']) ? '' : 'disabled' ?> required class="text-name">

        <p>Responsável: </p>
        <input type="text" name="responsavel" value="{{$recados->responsavel}}" style="width:100px" <?php echo !empty($_GET['editar']) ? '' : 'disabled' ?> required class="text-name">

        <p>Descrição do recado: </p>
        <textarea name="descriçao" value="{{$recados->descriçao}}" style="width:100px" <?php echo !empty($_GET['editar']) ? '' : 'disabled' ?> required class="text-name">></textarea>

        <!--Botões-->
        <div class="botoes">
            <?php if (!isset($_GET['editar'])) { ?>
                <a class="btn btn-primary" href="?editar=1">Editar Perfil </a>
            <?php } else { ?>
                <input type="submit" name="save" value="Guardar" id="save">
            <?php } ?>
        </div>
    </form>
</div>
@endsection