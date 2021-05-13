<link href="{{ url('css/ver_recado.css') }}" rel="stylesheet">
@extends('layouts.vertical')

@section('titulo', 'Recado - vista geral')
@section('content')
<div class="container" style="background-color:white;">
    <table class="table table-striped table-hover">
        <thead>
            <tr>
                <th scope="row">Assunto*</th>
                <th scope="col">Descrição do recado*</th>
            </tr>
        </thead>
        <tbody>
            <form action="/inicio/recados/update/{{$recado->id}}" method="POST" id="alterar-recado" class="input-grouphideBox">
                @csrf
                <tr>

                    <input type="hidden" name="responsavel" value="{{$recado->responsavel}}">
                    <th scope="row"> <textarea name="assunto" style="width:300px; height:150px" value="{{$recado->assunto}}" <?php echo !empty($_GET['editar']) ? '' : 'disabled' ?> required class="text-name"> {{$recado->assunto}}</textarea></textarea>
                    <td> <textarea name="descriçao" style="width:300px; height:150px" value="{{$recado->descriçao}}" <?php echo !empty($_GET['editar']) ? '' : 'disabled' ?> required class="text-name"> {{$recado->descriçao}}</textarea> </textarea>
                    <td>
                        <!--Botões-->
                        <div class="botoes">
                            <?php if (!isset($_GET['editar'])) { ?>
                                <a class="btn btn-primary" style="width:100px; font-size:17px" href="?editar=1"> <b>Editar</b></a>
                            <?php } else { ?>
                                <input type="submit" class="btn btn-primary" style="font-weight:bold;" name="save" value="Guardar alterações" id="save">
                            <?php } ?>
                        </div>
                </tr>
            </form>
        </tbody>
    </table>
</div>
@endsection