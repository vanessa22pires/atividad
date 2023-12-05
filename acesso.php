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
<body>
    
    <h1>Acesso</h1>

    <form method="POST">

        <label>E-mail:</label>
        <input type="text" name="email" minlength="3" required><br><br>

        <label>Senha:</label>
        <input type="password" name="senha" minlength="3" required><br><br>

        <input type="submit" name="acessar" value="Acessar">

      <?php
        

            if (isset($_REQUEST["acessar"]))
            {
                $u = new usuario();
               

                if ($u->autenticarUsuario($_REQUEST["email"], $_REQUEST["senha"]) == 0)
                {
                    echo "<p>Usuário e/ou senha incorreto(s).</p>";                   
                }
                else {
                    
                    $cookieName = "nome";
                    $cookieValue = $u->getNome();
                    setcookie($cookieName, $cookieValue, time() + 86400, "/");
                    header("Location: arearestrita.php");




                }
            }
            

        ?>

    </form>
    
</body>
</html>