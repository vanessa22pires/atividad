<?php
include_once("class/usuario.php");

?>


<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<header>

<header>
<body>
    <h1>Área restrita</h1>

    <?php
        session_start();
        if(isset($_COOKIE["nome"]))
         {
        echo "<p>Olá, seja bem vindo " . $_COOKIE["nome"] . "</p>";}
       
        else {
           header("Location: acesso.php");
           }
       
 
              
    ?>

    <a href="acesso.php">Login</a>
    <a href="sair.php">Sair</a>




</body>
</html>