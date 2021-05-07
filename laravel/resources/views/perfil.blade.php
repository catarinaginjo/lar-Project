@extends('layouts.vertical')
@section('titulo', 'O meu Perfil')
@section('content')
<div class="msg">
  <!-- mensagens de alerta -->
  <?php if (isset($_GET['sucesso'])) { ?>
    <div style="width: 25%;  height:20%;  padding: 0.5rem;background-color: green;color:white; margin-top:0px; margin-bottom:20px;border-radius:0.5rem">
      <b>Alterações guardadas com sucesso!</b>
    </div>
  <?php } ?>
</div>

<div class="container">
  <form action="/inicio/perfil/update/{{Auth::user()->id}}" method="POST" id="alterar-perfil" class="input-grouphideBox">
    {{ csrf_field() }}
    <div class="main-body">
      <div class="row gutters-sm">
        <div class="col-md-4 mb-3">
          <div class="card">
            <div class="card-body">
              <div class="d-flex flex-column align-items-center text-center">
                <img src="{{ Auth::user()->foto() }}" alt="Admin" class="rounded-circle" width="150" <?php echo !empty($_GET['editar']) ? '' : 'disabled' ?>>
                <div class="mt-3" style="color:black">
                  <input type="text" name="nome" value="{{Auth::user()->nome}}" style="width:100px" <?php echo !empty($_GET['editar']) ? '' : 'disabled' ?> required class="text-name">
                  <input type="text" name="apelido" value="{{Auth::user()->apelido}}" style="width:100px" <?php echo !empty($_GET['editar']) ? '' : 'disabled' ?> required class="text-name">
                  <input type="text" name="cargo" value="{{Auth::user()->cargo}}" style="width:150px; margin-top:4px;" <?php echo !empty($_GET['editar']) ? '' : 'disabled' ?> required class="text-name">
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
                  <h6 class="mb-0" style="color:black">Email</h6>
                </div>
                <div class="col-sm-9 text-secondary">
                  <input type="text" name="email" value="{{Auth::user()->email}}" <?php echo !empty($_GET['editar']) ? '' : 'disabled' ?> style="width:300px">

                </div>
              </div>
              <hr>
              <div class="row">
                <div class="col-sm-4">
                  <h6 class="mb-0" style="color:black">Data de Nascimento</h6>
                </div>
                <div class="col-sm-5 text-secondary">
                  <input type="text" name="data_nascimento" value="{{Auth::user()->data_nascimento}}" <?php echo !empty($_GET['editar']) ? '' : 'disabled' ?> style="width:300px">
                </div>
              </div>
              <hr>

              <div class="row">
                <div class="col-sm-3">
                  <h6 class="mb-0" style="color:black">Idade:</h6>
                </div>
                <div class="col-sm-9 text-secondary">
                  <p style="font-size:18px">{{ Auth::user()->idade() }} anos</p>
                </div>
              </div>

              <hr>
              <div class="row">
                <div class="col-sm-3">
                  <h6 class="mb-0" style="color:black">Contacto</h6>
                </div>
                <div class="col-sm-9 text-secondary">
                  <input type="tel" name="contacto" maxlength="9" value="{{Auth::user()->contacto}}" <?php echo !empty($_GET['editar']) ? '' : 'disabled' ?> style="width:300px">

                </div>
              </div>
              <hr>
              <div class="row">
                <div class="col-sm-3">
                  <h6 class="mb-0" style="color:black">Morada</h6>
                </div>
                <div class="col-sm-9 text-secondary">
                  <input type="text" name="morada" value="{{Auth::user()->morada}}" <?php echo !empty($_GET['editar']) ? '' : 'disabled' ?> style="width:300px">

                </div>
              </div>
              <hr>
              <div class="row">
                <div class="col-sm-3">
                  <h6 class="mb-0" style="color:black">Localidade</h6>
                </div>
                <div class="col-sm-9 text-secondary">
                  <input type="text" name="localidade" value="{{Auth::user()->localidade}}" <?php echo !empty($_GET['editar']) ? '' : 'disabled' ?> style="width:300px">
                </div>
              </div>
              <hr>

              <div class="row">
                <div class="col-sm-3">
                  <a href="{{'/'}}" class="btn btn-danger" style="margin-left:250px; width:200px;"><b>Alterar Password</b></a>
                </div>
              </div>
              <hr>
              <!--Botões-->
              <div class="botoes">
                <?php if (!isset($_GET['editar'])) { ?>
                  <a class="btn btn-primary" href="?editar=1" style="margin-left:250px; width:200px;"><b>Editar Perfil</b> </a>
                <?php } else { ?>
                  <input class="btn btn-success" style="margin-left:250px; width:200px; font-weight:bold" type="submit" name="save" value="Guardar" id="save">
                <?php } ?>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </form>
</div>

@endsection

<style>
  input {
    font-weight: bold;
  }
</style>