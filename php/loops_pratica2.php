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

            $funcionarios = array(
                array('nome' => 'João', 'salario' => 2500, 'data_nacimento' => '20/02/2020'),
                array('nome' => 'Maria', 'salario' => 3500),
                array('nome' => 'Milena', 'salario' => 2200),
            );

            echo '<pre>';
            print_r($funcionarios);
            echo '<pre>';
            
            foreach ($funcionarios as $idx => $funcionario) {
                # code...
                //print_r($funcionario);

                foreach($funcionario as $idx2 => $valor){
                    echo "$idx2 - $valor <br>";
                }

                //echo "ID: $idx - Nome: $funcionario";
                

                echo '<hr>';
            }
            

        ?>
        


    </body>    
</html>