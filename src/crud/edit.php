<?php 
session_start();

include_once('dbconnect.php');

$dados = $_POST;

$sql  = "UPDATE pessoa
            SET nome= :nome, 
                apelido= :apelido, 
                email= :email, 
                endereco= :endereco, 
                cidade= :cidade, 
                estado = :estado,
                alterado_em = :alterado_em 
            WHERE 
                (id = :id)";

$update = $connection->prepare($sql);

$update->bindValue(':nome', $dados['nome'], PDO::PARAM_STR);
$update->bindValue(':apelido', $dados['apelido'], PDO::PARAM_STR);
$update->bindValue(':email', $dados['email'], PDO::PARAM_STR);
$update->bindValue(':endereco', $dados['endereco'], PDO::PARAM_STR);
$update->bindValue(':cidade', $dados['cidade'], PDO::PARAM_STR);
$update->bindValue(':estado', $dados['estado'], PDO::PARAM_STR);
$update->bindValue(':alterado_em', date('Y-m-d H:i:s'), PDO::PARAM_STR);
$update->bindValue(':id', $dados['id'], PDO::PARAM_INT);

$result = $update->execute();

if ($result) 
{
    $_SESSION['alert'] = 
    [
        'type' => 'warning',
        'message' => 'Usuário editado com sucesso!'
    ];
     header('Location: /');
}
?>
