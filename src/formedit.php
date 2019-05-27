<?php 
include_once('navbar.php');

include_once('crud/search.php'); 

//foreach($pessoa->fetchAll(PDO::FETCH_ASSOC) as $data){
$result = $pessoa->fetchAll(PDO::FETCH_ASSOC);
if($result == true){
$data = $result[0];
?>
<form action="crud/edit.php" method="POST" class="form container-fluid">
    <h3>Editar membro </h3>
    <hr>
    <input type="hidden" name="id" value="<?= $data['id'] ?>">
    <div class="form-group">
        <label for="formGroupInput">Nome</label>
        <input type="text" name="nome" class="form-control" value="<?= $data['nome']; ?>">
    </div>
    <div class="form-group">
        <label for="formGroupInput">Apelido</label>
        <input type="text" name="apelido" class="form-control" id="formGroupInput" value="<?= $data['apelido']; ?>" >
    </div>
    <div class="form-group">
        <label for="InputEmail1">Endereço de email</label>
        <input type="email" name="email" class="form-control" value="<?= $data['email']; ?>" >
    </div>
    <div class="form-group">
        <label for="inputAddress">Endereço</label>
        <input type="text" name="endereco" class="form-control" id="inputAddress" value="<?= $data['endereco']; ?>" >
    </div>
        <div class="form-group">
        <label for="inputCity">Cidade</label>
        <input type="text" name="cidade" class="form-control" id="inputCity" value="<?= $data['cidade']; ?>" >
    </div>
    <div class="form-group">
        <label for="inputCity">Estado</label>
        <input type="text" name="estado" class="form-control" id="inputCity" value="<?= $data['estado']; ?>" >
    </div>
        <button type="submit" class="btn btn-dark">Salvar</button>
</form>
    <?php
    } 
    else
    {?>
    <div class="alert alert-danger" role="alert">
    Usuário não existente!
    </div>
    <?php } ?>