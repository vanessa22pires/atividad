
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="script.js"></script>
    <title>Document</title>
</head>
<body>
    <form method="">
        <label for="">nome:</label>
        <input type="text" name="nome" minlength="3" required><br><br>

        <label for="">Email:</label>
        <input type="text" name="email" minlength="3" required><br><br>
        
        <label for="">Data de nascimento:</label>
        <input type="text" name="dtNascimento" minlength="3" required><br><br>

        <label for="">Cidade:</label>
        <input type="text" name="dtNascimento" minlength="3" required><br><br>

        <label for="">senha:</label>
        <input type="text" name="cidade" minlength="3" required><br><br>

        <label for="">confirme sua senha</label>
        <input type="text" name="senha" minlength="3" required><br><br>
        <input type="submit" name="cadastrar" value="cadastrar">
    </form>



    <?php

if ( isset($_REQUEST["cadastrar"]) ) 
{
    include_once("class/usuario.php");
   
    $u = new usuario();
    $u->create($_REQUEST["nome"], $_REQUEST["email"], $_REQUEST["dtNascimento"],$_REQUEST["cidade"], $_REQUEST["senha"]); 
    echo $u->inserirusuario() == true ?
            "<p>usuario cadastrado.</p>" :
            "<p>Ocorreu um erro.</p>";
}
?>

    <?php
        
        include_once("class/usuario.php");
        $u = new usuario();
        $lista = $u->listarusuario();
       if ($lista != false)
       {
       
        echo"
        <table>
            <tr>
           
            <th>Nome</th>
            <th>Email</th>
            <th>DtNascimento</th>
            <th>Cidade</th>
            <th>Senha</th>
             </tr>";
           
             foreach ($lista as $item) {
                echo "
                     <tr>
                         <td> " . $item["nome"] . "</td>
                         <td> " . $item["email"] . "</td>
                         <td> " . $item["dtNascimento"] . "</td>
                         <td> " . $item["cidade"] . "</td>
                         <td> " . $item["senha"] . "</td>

                         <td> <a href='editarusuario.php?pid=" . $item["idUsuario"] .  "'>Editar</a> </td>
                         <td> <a href='excluirusuario.php?pid=" . $item["idUsuario"] ."' onClick='return confirmar()'> >Excluir</a> </td>
                     </tr>";
            }
       echo  "</table>";
        }
        else {
            echo "ocorreu um erro no sistema,tente novamente mais tarde.";
        }

         ?>
               <a href="areaRestrita.php?nome=vanessa">Voltar</a> 
</body>
</html>
