<link href="{{ url('css/ementa.css') }}" rel="stylesheet">

@extends('layouts.vertical')
@section('titulo', 'Perfil de Funcionário')
@section('content')

<div class="msg">
    <!-- mensagens de alerta -->
    <?php if (isset($_GET['sucesso_alteraçao_utilizador'])) { ?>
        <div style="width: 30%;  height:5%;  padding: 0.5rem;background-color: green;color:white; margin-top:0px; margin-bottom:20px;border-radius:0.5rem">
            O Perfil do funcionário foi alterado com sucesso!
        </div>
    <?php } ?>
</div>

<div class="container">
    <form action="/inicio/funcionarios/update/{{$user->id}}" method="POST" id="alterar-perfil" class="input-grouphideBox">
        {{ csrf_field() }}
        <div class="main-body">
            <div class="row gutters-sm">
                <div class="col-md-14 mb-3">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex flex-column align-items-center text-center">
                                <img src="{{ $user->foto() }}" alt="Admin" class="rounded-circle" width="150" height="150" <?php echo !empty($_GET['editar']) ? '' : 'disabled' ?>>
                                <div class="mt-3" style="color:black">
                                    <input type="text" name="nome" value="{{$user->nome}}" style="width:100px" <?php echo !empty($_GET['editar']) ? '' : 'disabled' ?> required class="text-name">
                                    <input type="text" name="apelido" value="{{$user->apelido}}" style="width:100px" <?php echo !empty($_GET['editar']) ? '' : 'disabled' ?> required class="text-name">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-8">
                    <div class="card mb-3">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-sm-3">
                                    <h6 class="mb-0" style="color:black">Cargo:</h6>
                                </div>
                                <div class="col-sm-9 text-secondary">
                                    <input type="tel" name="cargo" maxlength="9" value="{{$user->cargo}}" <?php echo !empty($_GET['editar']) ? '' : 'disabled' ?> style="width:300px">
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-sm-3">
                                    <h6 class="mb-0" style="color:black">Contacto:</h6>
                                </div>
                                <div class="col-sm-9 text-secondary">
                                    <input type="tel" name="contacto" maxlength="9" value="{{$user->contacto}}" <?php echo !empty($_GET['editar']) ? '' : 'disabled' ?> style="width:300px">
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-sm-4">
                                    <h6 class="mb-0" style="color:black">Data de Nascimento</h6>
                                </div>
                                <div class="col-sm-13 text-secondary">
                                    <input type="text" name="data_nascimento" value="{{$user->data_nascimento}}" <?php echo !empty($_GET['editar']) ? '' : 'disabled' ?> style="width:300px">

                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-sm-3">
                                    <h6 class="mb-0" style="color:black">Idade:</h6>
                                </div>
                                <div class="col-sm-9 text-secondary">
                                    <p style="font-size:18px">{{ $user->idade() }} anos</p>
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-sm-3">
                                    <h6 class="mb-0" style="color:black">Email:</h6>
                                </div>
                                <div class="col-sm-9 text-secondary">
                                    <input type="text" name="email" value="{{$user->email}}" <?php echo !empty($_GET['editar']) ? '' : 'disabled' ?> style="width:300px">
                                </div>
                            </div>
                            <hr>
                            
                            <div class="row">
                                <div class="col-sm-3">
                                    <h6 class="mb-0" style="color:black">Morada:</h6>
                                </div>
                                <div class="col-sm-9 text-secondary">
                                    <input type="text" name="text" value="{{$user->morada}}" <?php echo !empty($_GET['editar']) ? '' : 'disabled' ?> style="width:300px">
                                </div>
                            </div>
                            <hr>
                            
                            <div class="row">
                                <div class="col-sm-3">
                                    <h6 class="mb-0" style="color:black">Localidade:</h6>
                                </div>
                                <div class="col-sm-9 text-secondary">
                                    <input type="text" name="localidade" value="{{$user->localidade}}" <?php echo !empty($_GET['editar']) ? '' : 'disabled' ?> style="width:300px">
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-sm-3">
                                    <h6 class="mb-0" style="color:black">Username:</h6>
                                </div>
                                <div class="col-sm-9 text-secondary">
                                    <input type="text" name="username" value="{{$user->username}}" <?php echo !empty($_GET['editar']) ? '' : 'disabled' ?> style="width:300px">
                                </div>
                            </div>
                            <hr>
                            <div class="botoes">
                                <?php if (!isset($_GET['editar'])) { ?>
                                    <a class="btn btn-primary" href="?editar=1"><b>Editar Perfil </b></a>
                                <?php } else { ?>
                                    <input type="submit" name="save" value="Guardar" id="save">
                                <?php } ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
    <div class="row">
        <div class="col-sm-11" style="text-align: center" > 
            <form action="{{ url('/inicio/funcionarios/destroy/'.$user->id) }}" method="POST">
                @csrf
                <button type="submit" class="btn btn-danger"><b>Apagar Funcionário</b></button>
            </form>
        </div>
    </div>
</div>
@endsection

<style>
    input {
        font-weight: bold;
    }
</style>