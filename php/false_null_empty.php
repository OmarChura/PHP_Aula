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

            //false (true/false) - tipo variavel boolean
            //null e empty - valores especiais

            $funcionarios1 = null;
            $funcionarios2 = '';
            $funcionarios3 = false;

            //valores null
            if (is_null($funcionarios1)) {
                # code...
                echo 'sim null';
            }else{
                echo ' nao null';
            }

            echo '<br>';

            if (is_null($funcionarios2)) {
                # code...
                echo 'sim null';
            }else{
                echo ' nao null';
            }

            echo '<br>';

            if (is_null($funcionarios3)) {
                # code...
                echo 'sim null';
            }else{
                echo ' nao null';
            }

            echo '<br>';

            //valores vazios
            if (empty($funcionarios1)) {
                # code...
                echo 'sim vazia';
            }else{
                echo ' nao vazia';
            }

            echo '<br>';

            if (empty($funcionarios2)) {
                # code...
                echo 'sim vazia';
            }else{
                echo ' nao vazia';
            }

            echo '<br>';

            if (empty($funcionarios3)) {
                # code...
                echo 'sim vazia';
            }else{
                echo ' nao vazia';
            }

            
            
        ?>
        


    </body>    
</html>