<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>

    <body>
        
        
        <?php
            $num1 = -3.5; //ceil -= 3 ----- floor = -4
            $num = 7.3;
            echo ceil($num) . '<br>'; // arredonda para cima
            echo ceil($num1) . '<br>';

            echo floor($num) . '<br>'; //arredonda para baixo

            echo round($num) . '<br>'; // .0 e .4 => baixo / .5 => cima

            echo rand() . '<br>'; // gerar um valor aleatorio
            echo getrandmax() . '<br>'; // gera o valor maximo do S.O.
            echo rand(0, 100) . '<br>'; // inicio/final

            echo sqrt($num) . '<br>'; // raiz quadrada
            
        ?>
        


    </body>    
</html>