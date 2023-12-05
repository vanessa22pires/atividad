<?php
    include_once("class/usuario.php");
    $u = new usuario();
 
    $u->DeleteUser($_GET["pid"]);
    echo "Usuario excluído";
?>
 
<a href="cadusuario.php">Voltar</a>