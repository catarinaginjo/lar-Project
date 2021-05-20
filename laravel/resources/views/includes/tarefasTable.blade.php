<script src="{{ asset('js/tarefas.js') }}"></script>

<!--Tabela relacionada a Tarefas diárias atribuidas ao utente -->
<hr>
<p style="text-align: center; font-size:25px; font-weight:bold;">TAREFAS DIÁRIAS</p>

<div id="tarefas_app">

  <!-- Previous -->
  <div class="imgbox" style=" margin-left:20px;float:left">
    <a href="#" @click.prevent="previousDay">
      <img src="{{ asset('images/previous.png') }}" alt="previous" style="width:50px; height:50px; margin-bottom:15px">
    </a>
  </div>
  <!-- Next -->
  <div class="imgbox" style=" margin-left:20px; float:right">
    <a href="#" @click.prevent="nextDay">
      <img src="{{ asset('images/next.png') }}" alt="previous" style="width:50px; height:50p; margin-bottom:20px">
    </a>
  </div>

  <!-- Date of table-->

  <div class="abc" style="font-size:20px; font-weight:bold; text-align:center;">
    Data: [[ currentDate.format("DD-MM-YYYY") ]]
  </div>

  <!-- Tabela -->
  <div class="container" style="background-color:white;margin-top:50">
    <table class="table table-striped table-hover" id="tabela-tarefas">
      <thead class="thead-dark">
        <tr>
          <th scope="col">Banho</th>
          <th scope="col">Auxiliar</th>
          <th scope="col">Hora</th>
        </tr>
      </thead>
      <tbody>
        <tr v-for="task in tasks">
          <th scope="row">[[ task.banho ]]</th>
          <td>[[ task.auxiliar.nome ]] [[ task.auxiliar.apelido ]] </td>
          <td> [[ task.created_at]]</td>
        </tr>
      </tbody>
    </table>
    <hr style="border: 1px solid black;">

    <table class="table table-striped table-hover" id="tabela-tarefas" style="margin-top:20px;">
      <thead class="thead-dark">
        <tr>
          <th scope="col">Mudança de fraldas</th>
          <th scope="col">Auxiliar</th>
          <th scope="col">Hora</th>
        </tr>
      </thead>
      <tbody>
        <tr v-for="task in tasks">
          <th scope="row">[[ task.num_fraldas ]]</th>
          <td>[[ task.auxiliar.nome ]] [[ task.auxiliar.apelido ]] </td>
          <td> [[ task.created_at]]</td>
        </tr>
      </tbody>
    </table>

    <hr style="border: 1px solid black;">
    <table class="table table-striped table-hover" id="tabela-tarefas">
      <thead class="thead-dark">
        <tr>
          <th scope="col">Medicação </th>
          <th scope="col">Auxiliar</th>
          <th scope="col">Hora</th>
        </tr>
      </thead>
      <tbody>
        <tr v-for="task in tasks">
          <th scope="row">[[ task.num_medicaçao ]] </th>
          <td>[[ task.auxiliar.nome ]] [[ task.auxiliar.apelido ]] </td>
          <td> [[ task.created_at]]</td>
        </tr>
      </tbody>
    </table>

    <hr style="border: 1px solid black;">
    <table class="table table-striped table-hover" id="tabela-tarefas">
      <thead class="thead-dark">
        <tr>
          <th scope="col">Insulina </th>
          <th scope="col">Auxiliar</th>
          <th scope="col">Hora</th>
        </tr>
      </thead>
      <tbody>
        <tr v-for="task in tasks">
          <th scope="row">[[ task.insulina]] </th>
          <td>[[ task.auxiliar.nome ]] [[ task.auxiliar.apelido ]] </td>
          <td> [[ task.created_at]]</td>
        </tr>
      </tbody>
    </table>

    <hr style="border: 1px solid black;">
    <table class="table table-striped table-hover" id="tabela-tarefas">
      <thead class="thead-dark">
        <tr>
          <th scope="col">Corte cabelo </th>
          <th scope="col">Auxiliar</th>
          <th scope="col">Hora</th>
        </tr>
      </thead>
      <tbody>
        <tr v-for="task in tasks">
          <th scope="row">[[ task.corte_cabelo]] </th>
          <td>[[ task.auxiliar.nome ]] [[ task.auxiliar.apelido ]] </td>
          <td> [[ task.created_at]]</td>
        </tr>
      </tbody>
    </table>

    <hr style="border: 1px solid black;">
    <table class="table table-striped table-hover" id="tabela-tarefas">
      <thead class="thead-dark">
        <tr>
          <th scope="col">Corte barba </th>
          <th scope="col">Auxiliar</th>
          <th scope="col">Hora</th>
        </tr>
      </thead>
      <tbody>
        <tr v-for="task in tasks">
          <th scope="row">[[ task.corte_barba ]] </th>
          <td>[[ task.auxiliar.nome ]] [[ task.auxiliar.apelido ]] </td>
          <td> [[ task.created_at]]</td>
        </tr>
      </tbody>
    </table>

    <hr style="border: 1px solid black;">
    <table class="table table-striped table-hover" id="tabela-tarefas">
      <thead class="thead-dark">
        <tr>
          <th scope="col">Corte unhas </th>
          <th scope="col">Auxiliar</th>
          <th scope="col">Hora</th>
        </tr>
      </thead>
      <tbody>
        <tr v-for="task in tasks">
          <th scope="row">[[ task.corte_unhas]] </th>
          <td>[[ task.auxiliar.nome ]] [[ task.auxiliar.apelido ]] </td>
          <td> [[ task.created_at]]</td>
        </tr>
      </tbody>
    </table>
  </div>





  <style>
    .abc {
      margin-left: 476px;
      background: none;
      height: 35px;
      width: 170px;
      border-radius: 10px;
      font-size: 20px;
      font-weight: bold;
    }

    .tarefas {
      margin-bottom: 100px;
      margin-top: 40px;
      background-color: white;
    }
  </style>