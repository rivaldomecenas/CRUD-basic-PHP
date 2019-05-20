<?php 

$id = $_GET['id'];

include_once('dbconnect.php');

var_dump($id);

$sql = "DELETE FROM pessoa WHERE id = $id";

$delete = $connection->prepare($sql);
$delete->bindValue('id', 'id', PDO::PARAM_INT);

print $delete->execute();
