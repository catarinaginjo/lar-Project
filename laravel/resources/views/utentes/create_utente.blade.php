<link href="{{ url('css/button.css') }}" rel="stylesheet">
@extends('layouts.backend')
@section('content')

<h1 style="color:orange;">Novo utente</h1>

<form action="{{url('/inicio/utentes')}}" method="POST" style="font-weight:bold;" enctype="multipart/form-data">
    @csrf
    Nome: <input type="text" name="nome"><br><br>
    Contacto familiar: <input type="text" name="contacto"><br><br>
    Localidade: <input type="text" name="localidade"><br><br>
    Doença(s): <input type="text" name="doenca"><br><br>
    Condição: <input type="text" name="condicao"><br><br>
    Alergia(s): <input type="text" name="alergia"><br><br>
    Fotografia: <input type="file" name="pic"><br><br>

    <button type="submit" class="btn btn-primary">Criar Utente</button>
</form>

<!-- Gera mensagem de erro caso algum campo não esteja correto (relativamente as validações no controller)-->
@if ($errors->any())
<div class="alert alert-danger">
    <strong>Whoops!</strong> There were some problems with your input.<br><br>
    <ul>
        @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif

@endsection