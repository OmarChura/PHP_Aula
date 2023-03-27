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

            $registros = array(
                array('titulo' => 'Titulo notícia 1', 'conteudo' => 'Conteúdo notícia 1'), 
                array('titulo' => 'Titulo notícia 2', 'conteudo' => 'Conteúdo notícia 2'), 
                array('titulo' => 'Titulo notícia 3', 'conteudo' => 'Conteúdo notícia 3')
            );

            echo '<pre>';
            print_r($registros);
            echo '<pre>';
            echo '<br><br><br>';

            $idx = 0 ;

            echo 'quantidade de registros: ' . count($registros) . ' registros';
            /*
            while($idx < count($registros)){

                echo '<h3>' . $registros[$idx]['titulo'] . '</h3>';
                echo '<p>' . $registros[$idx]['conteudo'] . '</p>';
                echo '<hr>';

                $idx++;
            }
            */

            for ($i=0 ; $i < count($registros) ; $i++ ) { 
                # code...
                echo '<h3>' . $registros[$idx]['titulo'] . '</h3>';
                echo '<p>' . $registros[$idx]['conteudo'] . '</p>';
                echo '<hr>';
            }
        ?>
        


    </body>    
</html>