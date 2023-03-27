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

            //$lista_coisas = array();
            $lista_coisas = [];

            //$lista_coisas['frutas'] = array('Banana', 'Maça', 'Morango', 'Uva');
            $lista_coisas['frutas'] = array('a'=>'Banana', 'b'=>'Maça', 'x'=>'Morango', 'z'=>'Uva');
            //$lista_coisas['pessoas'] = ['joao', 'josé', 'maria'];
            $lista_coisas['pessoas'] = [1 => 'joao', 2 => 'josé', 3 => 'maria'];

            echo '<pre>';
            print_r($lista_coisas);
            echo '<pre>';

            echo '<hr>';

            echo $lista_coisas['frutas']['x'] . '<br>';
            echo $lista_coisas['pessoas'][2];
            
        ?>
        


    </body>    
</html>