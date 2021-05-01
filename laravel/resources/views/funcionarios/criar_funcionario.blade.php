@extends('layouts.vertical')
@section('titulo', 'Novo funcionário')
@section('content')
<div class="container">
    <p>Os campos com * são obrigatórios.</p>
    <div class="main-body">
        <div class="row gutters-sm">
            <div class="col-md-4 mb-3">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex flex-column align-items-center text-center">
                            <img src="{{ asset('images/user.png') }}" alt="Funcionario pic" class="rounded-circle" width="150">
                            <form action="{{url('/inicio/funcionarios/store_funcionario')}}" method="POST" style="font-weight:bold;" enctype="multipart/form-data">
                                @csrf
                                <div class="mt-3" style="color:black">*
                                    <input type="file" name="foto">
                                </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card mb-3">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-sm-3">
                                <h6 class="mb-0" style="color:black">Nome*</h6>
                            </div>
                            <div class="col-sm-9 text-secondary">
                                <input type="text" name="nome">
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-sm-3">
                                <h6 class="mb-0" style="color:black">Apelido*</h6>
                            </div>
                            <div class="col-sm-9 text-secondary">
                                <input type="text" name="apelido">
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-sm-3">
                                <h6 class="mb-0" style="color:black">Cargo*</h6>
                            </div>
                            <div class="col-sm-5 text-secondary">
                                <input type="text" name="cargo">
                            </div>
                        </div>
                        <hr>
                        <hr>
                        <div class="row">
                            <div class="col-sm-3">
                                <h6 class="mb-0" style="color:black">Contacto*</h6>
                            </div>
                            <div class="col-sm-9 text-secondary">
                                <input type="text" name="contacto">
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-sm-3">
                                <h6 class="mb-0" style="color:black">Data de Nascimento*</h6>
                            </div>
                            <div class="col-sm-5 text-secondary">
                                <input type="date" name="data_nascimento">
                            </div>
                        </div>
                        <hr>

                        <div class="row">
                            <div class="col-sm-3">
                                <h6 class="mb-0" style="color:black">Morada*</h6>
                            </div>
                            <div class="col-sm-9 text-secondary">
                                <input type="text" name="morada">
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-sm-3">
                                <h6 class="mb-0" style="color:black">Localidade*</h6>
                            </div>
                            <div class="col-sm-9 text-secondary">
                                <input type="text" name="localidade">
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-sm-3">
                                <h6 class="mb-0" style="color:black">E-mail*</h6>
                            </div>
                            <div class="col-sm-9 text-secondary">
                                <input type="text" name="email">
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-sm-3">
                                <h6 class="mb-0" style="color:black">Username*</h6>
                            </div>
                            <div class="col-sm-9 text-secondary">
                                <input type="text" name="username">
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-sm-3">
                                <h6 class="mb-0" style="color:black">Password*</h6>
                            </div>
                            <div class="col-sm-5 text-secondary">
                                <input type="text" name="password">
                                <p>Esta password é temporária.</p>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-sm-4">
                                <button type="submit" id="mybtn" class="btn btn-primary">Criar Funcionário</button>
                            </div>
                        </div>

                    </div>
                </div>
                
            </div>
        </div>
    </div>
</div></form>


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