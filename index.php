<!doctype html>
<html lang="en">
    <head>
    
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="src/css/bootstrap.min.css" rel="stylesheet" media="screen">
    <link href="src/css/bootstrap.css" rel="stylesheet" type="text/css" />

    <title>CRUD IN PHP</title>
    </head>
    <body> 
    
    <?php session_start();?>
    <?php include_once('src/navbar.php'); ?>
    <?php include_once('src/message.php'); ?>
    <?php include_once('src/crud/conteudo.php');  ?>
    <script src="src/js/bootstrap.min.js"></script>
</body>
</html>
<?php session_destroy(); ?>
