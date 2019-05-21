<?php

include_once('dbconnect.php');

$connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

$id = $_POST['id'];

$sql = "SELECT * FROM pessoa WHERE id = $id";

$pessoa = $connection->query($sql);

?>