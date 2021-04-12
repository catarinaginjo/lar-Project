<!--Tabela de dados relacionados ao utente -->

<div class="container">
    <div class="main-body">
        <div class="row gutters-sm">
            <div class="col-md-14 mb-3">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex flex-column align-items-center text-center">
                            <img src="{{ asset('images/idosa0.jpg') }}" alt="Admin" class="rounded-circle" width="150">
                            <div class="mt-3" style="color:black">
                                <h4>{{$utente->nome}} {{$utente->apelido}}</h4>
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
                                <h6 class="mb-0" style="color:black">Contacto Familiar:</h6>
                            </div>
                            <div class="col-sm-9 text-secondary">
                                {{$utente->contacto_familiar}}
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-sm-4">
                                <h6 class="mb-0" style="color:black">Data de Nascimento</h6>
                            </div>
                            <div class="col-sm-13 text-secondary">
                                {{$utente->data_nascimento}}
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-sm-3">
                                <h6 class="mb-0" style="color:black">Idade:</h6>
                            </div>
                            <div class="col-sm-9 text-secondary">
                                <p>{{ $utente->idade }} anos</p>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-sm-3">
                                <h6 class="mb-0" style="color:black">Doenças:</h6>
                            </div>
                            <div class="col-sm-9 text-secondary">
                                {{$utente->doença}}
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-sm-3" style="color:black">
                                <h6 class="mb-0">Medicação:</h6>
                            </div>
                            <div class="col-sm-9 text-secondary">
                                {{$utente->medicaçao}}
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-sm-3">
                                <h6 class="mb-0" style="color:black">Alergias:</h6>
                            </div>
                            <div class="col-sm-9 text-secondary">
                                {{$utente->alergia}}
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-sm-3">
                                <h6 class="mb-0" style="color:black">Diabetes:</h6>
                            </div>
                            <div class="col-sm-9 text-secondary">
                                {{$utente->diabetes}}
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-sm-3">
                                <h6 class="mb-0" style="color:black">Hipertenso:</h6>
                            </div>
                            <div class="col-sm-9 text-secondary">
                                {{$utente->hipertensao}}
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-sm-3">
                                <h6 class="mb-0" style="color:black">Condições:</h6>
                            </div>
                            <div class="col-sm-9 text-secondary">
                                {{$utente->condiçoes}}
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-sm-3">
                                <h6 class="mb-0" style="color:black">Cuidados a ter:</h6>
                            </div>
                            <div class="col-sm-9 text-secondary">
                                {{$utente->cuidados}}
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-sm-3">
                                <h6 class="mb-0" style="color:black">Dieta:</h6>
                            </div>
                            <div class="col-sm-9 text-secondary">
                                {{$utente->dieta}}
                            </div>
                        </div>
                        <hr>


                        <div class="row">
                            <div class="col-sm-3">
                                <form action="{{ url('/inicio/utente/destroy/'.$utente->id) }}" method="POST">
                                    <a class="btn btn-primary" href="{{ url('utentes/edit/'. $utente->id) }}">Editar Perfil</a>
                                    <hr>
                                    @csrf
                                    <button type="submit" class="btn btn-danger">Apagar Utente</button>
                                </form>
                            </div>
                           
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>



<?php if (isset($_GET['sucesso_alteraçao_utente'])) { ?>
    <div style="width: 50%;  padding: 0.5rem;background-color: green;color:white; margin-top:0px;">
        O Perfil do utente foi alterado com sucesso!
    </div>
<?php }
if (isset($_GET['sucesso_destroy_utente'])) { ?>
    <div style="width: 50%;  padding: 0.5rem;background-color:red;color:white; margin-top:0px;">
        O utente foi eliminado com sucesso.
    </div>
<?php }
