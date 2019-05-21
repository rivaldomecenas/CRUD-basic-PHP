<?php 

include_once('dbconnect.php');

$id = $_POST['id'];

var_dump($_REQUEST);

$sql = "DELETE FROM pessoa WHERE id = $id";

$delete = $connection->prepare($sql);
$delete->bindValue('$id', 'id', PDO::PARAM_INT);

$result = $delete->execute();

// var_dump($_REQUEST);

if($result)
{
    header('Location: /');
}