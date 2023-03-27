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

            $lista_frutas = array('Banana', 'Maça', 'Morango', 'Uva');

            echo '<pre>';
            print_r($lista_frutas);
            echo '<pre>';
            
            foreach ($lista_frutas as $item) {
                # code...
                echo $item;
                if ($item == 'Banana') {
                    # code...
                    echo ' (Promoção, desconto 25% pela compra de duas bananas)' ;
                }

                echo '<br>';
            }

        ?>
        


    </body>    
</html>