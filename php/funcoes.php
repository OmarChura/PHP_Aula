<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>

    <body>
        
        
        <?php
            //void (sem retorn)
            function exibirBoasVindas()
            {
                # code...
                echo 'bem vindo <br>';
            }
            exibirBoasVindas();

            //return (com retorno)
            function calcularAreaTerreno($largura, $comprimento){
                return $largura * $comprimento;
            }

            $resultado = calcularAreaTerreno(5, 25);
            echo $resultado;
            
        ?>
        


    </body>    
</html>