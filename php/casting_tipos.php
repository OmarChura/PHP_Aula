<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>

    <body>
        

        <?php

            //gettype() => retorn o tipo da variavel
            $valor = true;
            //$valor2 = (float) $valor; //float , double ,real
            //$valor2 = (string) $valor; //string

            //$valor2 = (int) $valor;//integer, int
            //$valor2 = (string) $valor; //string

            //$valor2 = (int) $valor; //
            //$valor2 = (float) $valor; //
            //$valor2 = (boolean) $valor; //bool, boolean

            //$valor2 = (int) $valor; //
            $valor2 = (string) $valor; //
            $valor3 = (int) $valor2; //



            echo $valor . ' ' . gettype($valor);
            echo '<br>';
            echo $valor2 . ' ' . gettype($valor2);
            echo '<br>';
            echo $valor3 . ' ' . gettype($valor3);
            
        ?>


    </body>    
</html>