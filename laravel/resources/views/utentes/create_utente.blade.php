@extends('layouts.vertical')
@section('titulo', 'Novo utente')
@section('content')
<div class="container">
    <p>Os campos com * são obrigatórios.</p>
    <div class="main-body">
        <div class="row gutters-sm">
            <div class="col-md-4 mb-3">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex flex-column align-items-center text-center">
                            <img src="{{ asset('images/user.png') }}" alt="utente pic" id="utente_pic" class="rounded-circle" width="150">
                            <form action="{{url('/inicio/store_utente')}}" method="POST" style="font-weight:bold;" enctype="multipart/form-data">
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
                                <h6 class="mb-0" style="color:black">Contacto familiar*</h6>
                            </div>
                            <div class="col-sm-9 text-secondary">
                                <input type="text" name="contacto_familiar">
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-sm-4">
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
                                <h6 class="mb-0" style="color:black">Doenças</h6>
                            </div>
                            <div class="col-sm-9 text-secondary">
                                <input type="text" name="doenças">
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-sm-3">
                                <h6 class="mb-0" style="color:black">Condição</h6>
                            </div>
                            <div class="col-sm-9 text-secondary">
                                <input type="text" name="condiçao">
                                <p style="font-weight:lighter"> Ex.: dependente - cadeira de rodas; acamado (...)</p>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-sm-4">
                                <h6 class="mb-0" style="color:black">Cuidados a ter com o utente:</h6>
                            </div>
                            <div class="col-sm-5 text-secondary">
                                <input type="text" name="cuidados">
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-sm-3">
                                <h6 class="mb-0" style="color:black">Alergias</h6>
                            </div>
                            <div class="col-sm-9 text-secondary">
                                <input type="text" name="alergia">
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-sm-13">
                                <h6 class="mb-0" style="color:black">Medicação</h6>
                            </div>
                            <div class="col-sm-9 text-secondary">
                                <input type="text" name="medicaçao">
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-sm-13">
                                <h6 class="mb-0" style="color:black">Hipertenso</h6>
                            </div>
                            <div class="col-sm-9 text-secondary">
                                <input type="text" name="hipertensao">
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-sm-3">
                                <h6 class="mb-0" style="color:black">Diabetes</h6>
                            </div>
                            <div class="col-sm-9 text-secondary">
                                <input type="text" name="diabetes">
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-sm-13">
                                <h6 class="mb-0" style="color:black">Dieta alimentar</h6>
                            </div>
                            <div class="col-sm-12 text-secondary">
                                <input type="text" name="dieta">
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <button type="submit" id="mybtn" class="btn btn-primary">Criar Utente</button>
                        </div>
                    </div>
                </div>
                </form>
            </div>
        </div>
    </div>
</div>


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