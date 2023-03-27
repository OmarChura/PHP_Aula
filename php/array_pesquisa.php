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

            //in_array()
            //array-search()            

            
            //sequenciais (númericos)
            //$lista_frutas = array('Banana', 'Maça', 'Morango', 'Uva');
            $lista_frutas = ['Banana', 'Maça', 'Morango', 'Uva'];
            /*
            echo '<pre>';
            print_r($lista_frutas);
            echo '<pre>';

            //echo in_array('Maça', $lista_frutas);//true = 1 // false = vazio

            echo array_search('Uva', $lista_frutas); 
            //retorna o indice no array - se nao encontrar retorna null
            */

            //$lista_coisas['frutas'] = array('Banana', 'Maça', 'Morango', 'Uva');
            $lista_coisas = ['frutas' => $lista_frutas , 'pessoas' => ['joao','josé','maria']];

            echo '<pre>';
            print_r($lista_coisas);
            echo '<pre>';

            //echo in_array('Uva', $lista_coisas['frutas']);
            echo array_search('Uva', $lista_coisas['frutas']);

        ?>
        


    </body>    
</html>