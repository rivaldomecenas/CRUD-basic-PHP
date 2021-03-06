<?php 
session_start();

$dados = $_POST;

$_SESSION['dados'] = $dados;

include_once('errors.php');

include_once('dbconnect.php');

/*
CREATE TABLE IF NOT EXISTS pessoa (
    id INT  AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(255),
    apelido VARCHAR(50),
    email VARCHAR(100),
    endereco VARCHAR(255),
    cidade VARCHAR(50),
    estado VARCHAR(20),
criado_em datetime,
alterado_em datetime
);
*/

$sql = 'INSERT INTO pessoa(nome, apelido, email, endereco, cidade, estado, criado_em, alterado_em) 
VALUE (:nome, :apelido, :email, :endereco, :cidade, :estado, NOW(), NOW())';

$insert = $connection->prepare($sql);

$insert->bindValue(':nome', $dados['nome'], PDO::PARAM_STR);
$insert->bindValue(':apelido', $dados['apelido'], PDO::PARAM_STR);
$insert->bindValue(':email', $dados['email'], PDO::PARAM_STR);
$insert->bindValue(':endereco', $dados['endereco'], PDO::PARAM_STR);
$insert->bindValue(':cidade', $dados['cidade'], PDO::PARAM_STR);
$insert->bindValue(':estado', $dados['estado'], PDO::PARAM_STR);

$result = $insert->execute();

if ($result) 
{   
    unset($_SESSION['dados']);
    $_SESSION['alert'] = 
    [
        'type' => 'success',
        'message' => 'Usuário criado com sucesso!'
    ];
    header("Location: /src/form.php");
}
?>