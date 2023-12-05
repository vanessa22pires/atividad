<?php
    include_once("class/Produto.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php

$p = new usuario();
$p->buscarusuario($_GET["pid"]);

echo "
    <form method='POST'>

    <label>Nome:</label>
    <input type='text' name='nome' minlength='3' value='" . $p->getNome() . "' required><br><br>

    <label>Valor:</label>
    <input type='text' name='valor' minlength='3' value='" . $p->getemail() . " ' required><br><br>

    <label>Categoria:</label>
    <input type='text' name='categoria' minlength='3' value='" . $p->getdtNascimento() . "' required><br><br>
   
    <label>Valor:</label>

    <input type='text' name='valor' minlength='3' value='" . $p->getcidade() . " ' required><br><br>

    <label>Categoria:</label>
    <input type='text' name='categoria' minlength='3' value='" . $p->getsenha() . "' required><br><br>


    <input type='submit' name='atualizar' value='Atualizar'>
";

if ( isset($_REQUEST["atualizar"]) ) 

    $p->setNome($_REQUEST["nome"]);
    $p->setValor($_REQUEST["email"]);
    $p->setNome($_REQUEST["dtNascimento"]);
    $p->setValor($_REQUEST["cidade"]);
    $p->setNome($_REQUEST["senha"]);
    

    echo $p->atualizarProduto($_GET["pid"]) == true ?
            "<p>Produto atualizado.</p>" :
            "<p>Ocorreu um erro.</p>";
}


?>


</form>
</body>
</html>