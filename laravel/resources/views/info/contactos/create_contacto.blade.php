
@extends('layouts.vertical')

@section('titulo', 'Novo contacto')
@section('content')


<table class="table table-secondary ">
    <thead>
        <tr>
            <th scope="row">Nome</th>
            <th scope="col">Número</th>
            <th scope="row">"Cargo"</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <form action="{{url('/inicio/contactos/store_contacto')}}" method="POST" style="font-weight:bold;" enctype="multipart/form-data">
                @csrf
                <th scope="row"> <input type="text" name="nome"></th>
                <td> <input type="text" name="numero"></td>
                <td> <input type="text" name="cargo"></td>
                <button type="submit" id="mybtn" style="margin-bottom:10px"class="btn btn-primary">Criar contacto</button>
            </form>


            <!-- Gera mensagem de erro caso algum campo não esteja correto (relativamente as validações no controller)-->
            @if ($errors->any())
            <div class="alert alert-danger">
                <strong>UPS!</strong>Erro com os dados que forneceu.<br><br>
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

@endsection
