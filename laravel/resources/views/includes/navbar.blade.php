<link rel="icon" href="{{ asset('images/logo.jpg') }}" type="image/x-icon">

<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" rel="stylesheet">

<nav class="navbar navbar-expand-lg navbar-light bg-light" style="font-size:20px; font-weight:bold">
  <img alt="logotipo" class="logotipo" type="image/x-icon" src="{{ asset('images/homepic.png') }}" style="width:80px">

  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="/"> Inicio <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{url('inicio/utentes')}}">Utentes</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Funcionários
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="{{url('inicio/auxiliares')}}">Auxiliares</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="{{url('inicio/cozinheiros')}}">Cozinheiros</a>
        </div>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Stock
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="{{url('inicio/stock_alimentos')}}">Alimentos</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="{{url('inicio/stock_produtos')}}">Produtos</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{url('inicio/controlo_mp')}}">Matérias-primas</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{url('inicio/ementa')}}">Ementa</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{url('inicio/recados')}}">Recados</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{url('inicio/contactos')}}">Contactos</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{url('inicio/perfil')}}">Perfil</a>
      </li>
    </ul>
  </div>
</nav>

<style>
  .nav-item {
    font-family: 'Roboto', sans-serif;
    font-size: 20px;
  }
</style>