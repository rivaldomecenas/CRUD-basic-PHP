<?php 

include_once('dbconnect.php');

$sql = 'SELECT * FROM pessoa';

$pessoa = $connection->query($sql);

unset($connection);
