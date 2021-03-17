<!--Tabela relacionada a Tarefas diárias atribuidas ao utente -->
<hr>
<p style="margin-left:480px; font-size:25px; font-weight:bold;">TAREFAS DIÁRIAS</p>

<!-- Previous -->
<div class="imgbox" style=" margin-left:20px;float:left">
  <a href="{{url('/')}}">
    <img src="{{ asset('images/previous.png') }}" alt="previous" style="width:50px; height:50px">
  </a>
</div>
<!-- Next -->
<div class="imgbox" style=" margin-left:20px; float:right">
  <a href="{{url('/')}}">
    <img src="{{ asset('images/next.png') }}" alt="previous" style="width:50px; height:50px">
  </a>
</div>

<!-- Date of table-->

<div class="abc">
  Data:
  <?php

  use Carbon\Carbon;

  $date = Carbon::today()->toDateString();
  echo $date ?>
</div>

<!-- Tabela -->
<div class="tarefas">
  <table class="table">
    <thead>
      <tr>
        <th scope="col">Tarefa</th>
        <th scope="col">Estado atual</th>
        <th scope="col">Auxiliar Responsável</th>
        <th scope="col">Data</th>
        <th scope="col">Hora</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <th scope="row">Banho</th>
        <td> Feito</td>
        <td> Ana Gomes</td>
        <td> 15.03.2021</td>
        <td> 9h42m</td>
      </tr>
      <tr>
        <th scope="row">Insulina</th>
      </tr>
      <tr>
        <th scope="row">NºFraldas</th>
      </tr>
      <tr>
        <th scope="row">Medicação</th>
      </tr>
      <tr>
        <th scope="row">Corte de Unhas</th>
      </tr>
      <tr>
        <th scope="row">Corte de Cabelo</th>
      </tr>
    </tbody>
  </table>
</div>

<style>
  .abc {
    margin-left: 500px;
    background: orange;
    height: 40px;
    width: 170px;
    border: 2px solid red;
    border-radius: 10px;
    font-size:20px;
    font-weight: bold;
  }

  .tarefas{
    margin-bottom: 100px; 
    margin-top:40px; 
    background-color:white;
  }
</style>