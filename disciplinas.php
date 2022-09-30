<?php
    include "./header.php";
?>

<div class="row">

<div class="col-12">
<div class="card">
<div class="card-header">
<p>Lista de Disciplinas</p>

<div class="button">

  <div class="mb-3 row">
    <a class="col-sm-2 col-form-label btn btn-primary">CADASTRAR</a>
      <div class="col-sm-8">
        <input type="search" class="form-control">
      </div>
    <button class="col-sm-2 col-form-label btn btn-outline-primary">PESQUISAR</button>
  </div>
</div><br />

<table class="table table-dark">
<thead>
<tr>
  <th scope="col">ID</th>
  <th scope="col">Nome</th>
  <th scope="col">Sigla</th>
  <th scope="col">Apelido</th>
</tr>
</thead>
<tbody>
<table class="table table-striped">
<tr>
  <th scope="row">1</th>
  <td>Administração Geral</td>
  <td>ADM</td>
  <td>ADM</td>
  <td>
  <a class="btn btn-warning">Editar</a>
  <a class="btn btn-danger">Excluir</a>
  </td>
</tr>
    
<tr>
  <th scope="row">2</th>
  <td>Gestão de Projetos de Sítio Internet II</td>
  <td>GES</td>
  <td>GES</td>
  <td>
  <a class="btn btn-warning">Editar</a>
  <a class="btn btn-danger">Excluir</a>
  </td>
</tr>
<tr>
  <th scope="row">3</th>
  <td >Pesquisa Operacional</td>
  <td>POP</td>
  <td>POP</td>
  <td>
  <a class="btn btn-warning">Editar</a>
  <a class="btn btn-danger">Excluir</a>
  </td>
</tr>
<tr>
  <th scope="row">4</th>
  <td >Planejamento Estratégico</td>
  <td>PLA</td>
  <td>PLA</td>
  <td>
  <a class="btn btn-warning">Editar</a>
  <a class="btn btn-danger">Excluir</a>
  </td>
</tr>
<tr>
  <th scope="row">5</th>
  <td>Português</td>
  <td>POR</td>
  <td>POR</td>
  <td>
  <a class="btn btn-warning">Editar</a>
  <a class="btn btn-danger">Excluir</a>
  </td>
</tr>
<tr>
  <th scope="row">6</th>
  <td >Prática de Design</td>
  <td>DES</td>
  <td>DES</td>
  <td>
  <a class="btn btn-warning">Editar</a>
  <a class="btn btn-danger">Excluir</a>
  </td>
</tr>
<tr>
  <th scope="row">7</th>
  <td >Prática Gestão Projetos</td>
  <td>PRO</td>
  <td>PRO</td>
  <td>
  <a class="btn btn-warning">Editar</a>
  <a class="btn btn-danger">Excluir</a>
  </td>
</tr>
</tbody>
</table>

</div>
</div>

</div>

<?php

    include "./footer.php";
?>