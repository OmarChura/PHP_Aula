<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>

    <body>
        
        
        <?php
            
            $texto = 'Curso completo de PHP';

            //string to lower
            echo $texto . '<br>';
            echo strtolower($texto) . '<br>';
            echo '<hr>';

            //string to upper
            echo $texto . '<br>';
            echo strtoupper($texto) . '<br>';
            echo '<hr>';

            //upper case firts
            echo $texto . '<br>';
            echo ucfirst($texto) . '<br>';
            echo '<hr>';

            //string lenght
            echo $texto . '<br>';
            echo strlen($texto) . '<br>';
            echo strlen($texto . '  ') . '<br>'; //os espaços contam
            echo '<hr>';

            //string replace
            echo $texto . '<br>';
            echo str_replace('PHP', 'JavaScript', $texto) . '<br>';
            echo str_replace('.', ',', '22.20') . '<br>';
            echo '<hr>';

             //string replace
             echo $texto . '<br>';
             //'Curso completo de PHP'
             //0,1,2,3,4,5,6,7,8,9,...,20
             echo substr($texto, 6, 8) . '<br>';
             echo substr($texto, 0, 14) . '...' . '<br>';
             
             echo '<hr>';
            

            
        ?>
        


    </body>    
</html>