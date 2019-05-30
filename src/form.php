<?php 
session_start();
include_once('navbar.php');
include_once('message.php');
unset($_SESSION['alert']);
unset($_SESSION['errors']);

?>
<form action="crud/create.php" method="POST" class="form container-fluid col-sm-offset-1 col-sm-8">
    <h3>Inserir novo membro </h3>
    <hr>
    <div class="form-group">
      <label for="formGroupInput">Nome</label>
      <input value="<?= $_SESSION['dados']['nome'] ?? '';?>" type="text" name="nome" class="form-control" placeholder="Nome..." >
    </div>
    <div class="form-group">
      <label for="formGroupInput">Apelido</label>
      <input value="<?= $_SESSION['dados']['apelido'] ?? '';?>" type="text" name="apelido" class="form-control" id="formGroupInput" placeholder="Digite um apelido">
    </div>
    <div class="form-group">
      <label for="InputEmail1">Endereço de email</label>
      <input value="<?= $_SESSION['dados']['email'] ?? '';?>" type="email" name="email" class="form-control" placeholder="Seu email">
    </div>
    <div class="form-group">
      <label for="inputAddress">Endereço</label>
      <input value="<?= $_SESSION['dados']['endereco'] ?? '';?>" type="text" name="endereco" class="form-control" id="inputAddress" placeholder="Ex: Rua dos Bobos, nº 0">
    </div>
    <div class="form-group">
      <label for="inputCity">Cidade</label>
      <input value="<?= $_SESSION['dados']['cidade'] ?? '';?>" type="text" name="cidade" class="form-control" id="inputCity" placeholder="Ex: Campinas">
    </div>
    <div class="form-group">
      <label for="inputCity">Estado</label>
      <input value="<?= $_SESSION['dados']['estado'] ?? '';?>" type="text" name="estado" class="form-control" id="inputCity" placeholder="Ex: São Paulo">
    </div>
    <button name="submit" type="submit" class="btn btn-dark">Enviar</button>
</form>

