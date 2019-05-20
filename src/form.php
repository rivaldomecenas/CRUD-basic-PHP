<?php include_once('navbar.php');?>

<form action="crud/create.php" method="POST" class="form container-fluid">
    <h3>Inserir novo membro </h3>
    <hr>
    <div class="form-group">
      <label for="formGroupInput">Nome</label>
      <input type="text" name="nome" class="form-control" placeholder="Nome...">
    </div>
    <div class="form-group">
      <label for="formGroupInput">Apelido</label>
      <input type="text" name="apelido" class="form-control" id="formGroupInput" placeholder="Digite um apelido">
    </div>
    <div class="form-group">
      <label for="InputEmail1">Endereço de email</label>
      <input type="email" name="email" class="form-control" placeholder="Seu email">
    </div>
    <div class="form-group">
      <label for="inputAddress">Endereço</label>
      <input type="text" name="endereco" class="form-control" id="inputAddress" placeholder="Ex: Rua dos Bobos, nº 0">
    </div>
    <div class="form-group">
      <label for="inputCity">Cidade</label>
      <input type="text" name="cidade" class="form-control" id="inputCity" placeholder="Ex: Campinas">
    </div>
    <div class="form-group">
      <label for="inputCity">Estado</label>
      <input type="text" name="estado" class="form-control" id="inputCity" placeholder="Ex: São Paulo">
    </div>
    <button type="submit" class="btn btn-dark">Enviar</button>
</form>