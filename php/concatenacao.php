<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>

    <body>
        <!-- -->

        <?php

            $nome = 'jorge';
            $cor = 'amarelo';
            $idade = 25;
            $atividadePreferida = 'andar de bicicleta';

            //operador .
            echo ' Olá ' . $nome . ', vi que sua cor preferia é '.$cor.', estou vendo tambén que você possui '.$idade.' anos e que voce gosta de '.$atividadePreferida;

            echo '<br>';

            echo " Olá $nome , vi que sua cor preferia é $cor, estou vendo tambén que você possui $idade anos e que voce gosta de $atividadePreferida";

            echo '<br>';

            echo ' Olá $nome , vi que sua cor preferia é $cor, estou vendo tambén que você possui $idade anos e que voce gosta de $atividadePreferida';


        ?>
        
    </body>    
</html>