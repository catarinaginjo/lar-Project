<script src="{{ asset('js/tarefas.js') }}"></script>

<!--Tabela relacionada a Tarefas diárias atribuidas ao utente -->
<hr>
<p style="text-align: center; font-size:25px; font-weight:bold;">TAREFAS DIÁRIAS</p>

<div id="tarefas_app">

  <!-- Previous -->
  <div class="imgbox" style=" margin-left:20px;float:left">
    <a href="#" @click.prevent="previousDay">
      <img src="{{ asset('images/previous.png') }}" alt="previous" style="width:50px; height:50px">
    </a>
  </div>
  <!-- Next -->
  <div class="imgbox" style=" margin-left:20px; float:right">
    <a href="#" @click.prevent="nextDay">
      <img src="{{ asset('images/next.png') }}" alt="previous" style="width:50px; height:50px">
    </a>
  </div>

  <!-- Date of table-->

  <div class="abc">
    Data: [[ currentDate.format("YYYY-MM-DD") ]]
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
        </tr>
      </thead>
      <tbody>
        <tr v-for="task in tasks">
          <th scope="row">[[ task.insulina ]]</th>
          <td> [[ task.auxiliar_id ]]</td>
          <td> [[ task.auxiliar.nome ]]</td>
          <td> [[ task.updated_at ]]</td>
        </tr>
      </tbody>
    </table>
  </div>
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