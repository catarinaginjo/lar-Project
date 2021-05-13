@extends('layouts.vertical')

@section('titulo', 'Novo contacto')
@section('content')

<p>Os campos com * são obrigatórios.</p>

<div class="container" style="background-color:white;">
<table class="table table-striped table-hover">
    <thead>
        <tr>
            <th scope="row">Nome*</th>
            <th scope="col">Número*</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <form action="{{url('/inicio/contactos/store_contacto')}}" method="POST" style="font-weight:bold;" enctype="multipart/form-data">
                @csrf
                <th scope="row"> <input type="text" name="nome"></th>
                <td> <input type="text" maxlength="9" name="numero"></td>
                <td><button type="submit" id="mybtn"  class="btn btn-primary"><b>Criar contacto</b></button><td>
            </form>


            <!-- Gera mensagem de erro caso algum campo não esteja correto (relativamente as validações no controller)-->
            @if ($errors->any())
            <div class="alert alert-danger">
                <strong>UPS! </strong>Erro com os dados que forneceu.<br><br>
                <ul>
                    @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
            @endif
        </tr>
    </tbody>
</table>
</div>
@endsection