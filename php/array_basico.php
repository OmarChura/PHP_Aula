<!-- https://www.php.net/manual/en/function.date.php -->
<!-- https://www.php.net/manual/en/timezones.america.php -->

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>

    <body>
        
        
        <?php

            /*
            //sequenciais (númericos)
            //$lista_frutas = array('Banana', 'Maça', 'Morango', 'Uva');
            $lista_frutas = ['Banana', 'Maça', 'Morango', 'Uva'];

            $lista_frutas[] = 'Abacaxi';

            /*
            echo '<pre>';
            var_dump($lista_frutas);
            echo '<pre>';
            echo '<hr>';
            echo '<pre>';
            print_r($lista_frutas);
            echo '<pre>';
            */
            /*

            echo $lista_frutas[2];
            */

            //associativo
            //$lista_frutas = array('a'=>'Banana', 'b'=>'Maça', 'x'=>'Morango', 'z'=>'Uva');
            $lista_frutas = ['a'=>'Banana', 'b'=>'Maça', 'x'=>'Morango', 'z'=>'Uva'];

            $lista_frutas['w'] = 'Abacaxi';

            echo '<pre>';
            var_dump($lista_frutas);

            echo $lista_frutas['x']
        ?>
        


    </body>    
</html>