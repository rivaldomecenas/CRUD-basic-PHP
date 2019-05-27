<?php 
session_start();
include_once('dbconnect.php');

$id = $_GET['id'];

//var_dump($_REQUEST);


$sql = "DELETE FROM pessoa WHERE id = $id";

$delete = $connection->prepare($sql);
$delete->bindValue('$id', 'id', PDO::PARAM_INT);

$result = $delete->execute();
print $result;
// var_dump($_REQUEST);
if($result)
{
    $_SESSION['alert'] = 
    [
        'message' => 'Usuário deletado com sucesso!',
        'type' => 'danger'
    ];
    header('Location: /');
} ?>
