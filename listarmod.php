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

        include_once("class/modalidade.php");
        $modalidade = new modalidade();

            $lista = $modalidade->listarmodalidade();

            if ($lista != 0)
            {
              
                foreach($lista as $i)
                {

                    $imagem = $i["imagem"];
                    $nome= $i["nome"];
                    $descricao = $i["descricao"];

                    echo "
                        <div class='card'>
                            <img class='thumb' src='$imagem'>
                            <p class='titulo-produto'>$nome</p> 
                            <p>$descricao</p>
                        </div>
                    ";
                }

            }

    ?>
    
</body>
</html>