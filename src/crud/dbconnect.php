<?php

$typeConnection = 'mysql:dbname=crudphp;host=127.0.0.1';
$user='root';
$password='';

$connection = new PDO($typeConnection, $user, $password);


$connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

?>