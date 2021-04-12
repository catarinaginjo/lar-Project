<link href="{{ url('css/ver_recado.css') }}" rel="stylesheet">
@extends('layouts.vertical')

@section('titulo', 'Recado - vista geral')
@section('content')

<div class="edit-recado" style="margin-left:200px; margin-top:-30px">
<p>Assunto: </p> 
<!-- acrescentar o value:   value="{{$recado->assunto}"  mas com -->
<input type="text" name="assunto"  class="form-control" placeholder="assunto" style="width:400px">

<!--<p>Data do Recado: </p> 
<input type="date" name="data_recado"  class="form-control" placeholder="data_recado" style="width:400px">-->

<p>Responsável: </p> 
<input type="text" name="responsavel"  class="form-control" placeholder="responsavel" style="width:400px">

<p>Recado: </p>
<textarea id="recado"></textarea>


<div class="botoes" style="margin-top:-15px;">
    <button type="submit" id="btn" class="btn btn-warning">Editar</button>
    <button type="submit" id="btn" class="btn btn-success">Guardar</button>
</div></div>
@endsection
