<!--Tabela de dados relacionados ao utente -->

<div class="container">
    <form action="/inicio/utentes/update/{{$utente->id}}" method="POST" id="alterar-perfil" class="input-grouphideBox">
        {{ csrf_field() }}
        <div class="main-body">
            <div class="row gutters-sm">
                <div class="col-md-14 mb-3">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex flex-column align-items-center text-center">
                                <img src="{{ $utente->foto() }}" alt="foto do utente" class="rounded-circle" width="150" height="150" <?php echo !empty($_GET['editar']) ? '' : 'disabled' ?> >
                                <div class="mt-3" style="color:black">
                                    <input type="text" name="nome" value="{{$utente->nome}}" style="width:100px" <?php echo !empty($_GET['editar']) ? '' : 'disabled' ?> required class="text-name">
                                    <input type="text" name="apelido" value="{{$utente->apelido}}" style="width:100px" <?php echo !empty($_GET['editar']) ? '' : 'disabled' ?> required class="text-name">
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
                                    <input type="tel" name="contacto_familiar" maxlength="9" value="{{$utente->contacto_familiar}}" <?php echo !empty($_GET['editar']) ? '' : 'disabled' ?> style="width:300px">
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-sm-3">
                                    <h6 class="mb-0" style="color:black">Data de Nascimento</h6>
                                </div>
                                <div class="col-sm-9 text-secondary">
                                    <input type="text" name="data_nascimento" value="{{$utente->data_nascimento}}" <?php echo !empty($_GET['editar']) ? '' : 'disabled' ?> style="width:300px">
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-sm-3">
                                    <h6 class="mb-0" style="color:black">Idade:</h6>
                                </div>
                                <div class="col-sm-9 text-secondary">
                                    <p style="font-size:18px">{{ $utente->idade() }} anos</p>
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-sm-3">
                                    <h6 class="mb-0" style="color:black">Doença(s):</h6>
                                </div>
                                <div class="col-sm-9 text-secondary">
                                    <input type="text" name="doença" value="{{$utente->doença}}" <?php echo !empty($_GET['editar']) ? '' : 'disabled' ?> style="width:300px">
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-sm-3">
                                    <h6 class="mb-0" style="color:black">Medicação:</h6>
                                </div>
                                <div class="col-sm-9 text-secondary">
                                    <input type="text" name="medicaçao" value="{{$utente->medicaçao}}" <?php echo !empty($_GET['editar']) ? '' : 'disabled' ?> style="width:300px">
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-sm-3">
                                    <h6 class="mb-0" style="color:black">Alergia(s):</h6>
                                </div>
                                <div class="col-sm-9 text-secondary">
                                    <input type="text" name="alergia" value="{{$utente->alergia}}" <?php echo !empty($_GET['editar']) ? '' : 'disabled' ?> style="width:300px">
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-sm-3">
                                    <h6 class="mb-0" style="color:black">Diabetes:</h6>
                                </div>
                                <div class="col-sm-9 text-secondary">
                                    <input type="text" name="diabetes" value="{{$utente->diabetes}}" <?php echo !empty($_GET['editar']) ? '' : 'disabled' ?> style="width:300px">
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-sm-3">
                                    <h6 class="mb-0" style="color:black">Hipertenso:</h6>
                                </div>
                                <div class="col-sm-9 text-secondary">
                                    <input type="text" name="hipertensao" value="{{$utente->hipertensao}}" <?php echo !empty($_GET['editar']) ? '' : 'disabled' ?> style="width:300px">
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-sm-3">
                                    <h6 class="mb-0" style="color:black">Condições:</h6>
                                </div>
                                <div class="col-sm-9 text-secondary">
                                    <input type="text" name="condiçao" value="{{$utente->condiçao}}" <?php echo !empty($_GET['editar']) ? '' : 'disabled' ?> style="width:300px">
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-sm-3">
                                    <h6 class="mb-0" style="color:black">Cuidados a ter:</h6>
                                </div>
                                <div class="col-sm-9 text-secondary">
                                    <input type="text" name="cuidados" value="{{$utente->cuidados}}" <?php echo !empty($_GET['editar']) ? '' : 'disabled' ?> style="width:300px">
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-sm-3">
                                    <h6 class="mb-0" style="color:black">Dieta Alimentar:</h6>
                                </div>
                                <div class="col-sm-9 text-secondary">
                                    <input type="text" name="dieta" value="{{$utente->dieta}}" <?php echo !empty($_GET['editar']) ? '' : 'disabled' ?> style="width:300px">
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-sm-3">
                                    <h6 class="mb-0" style="color:black">Morada:</h6>
                                </div>
                                <div class="col-sm-9 text-secondary">
                                    <input type="text" name="morada" maxlength="9" value="{{$utente->morada}}" <?php echo !empty($_GET['editar']) ? '' : 'disabled' ?> style="width:300px">
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-sm-3">
                                    <h6 class="mb-0" style="color:black">Localidade:</h6>
                                </div>
                                <div class="col-sm-9 text-secondary">
                                    <input type="text" name="localidade" maxlength="9" value="{{$utente->localidade}}" <?php echo !empty($_GET['editar']) ? '' : 'disabled' ?> style="width:300px">
                                </div>
                            </div>
                            <hr>

                            <!--Botões-->
                            <div class="botoes">
                                <?php if (!isset($_GET['editar'])) { ?>
                                    <a class="btn btn-primary" href="?editar=1">Editar Perfil </a>
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
        <div class="col-sm-11">
            <form action="{{ url('/inicio/utente/destroy/'.$utente->id) }}" method="POST">
                @csrf
                <button type="submit" class="btn btn-danger">Apagar Utente</button>
            </form>
        </div>
    </div>
</div>