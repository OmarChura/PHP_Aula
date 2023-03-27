<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>

    <body>
        

        <?php

            $parametro = '2';
            
            switch ($parametro) {
                case 1: //true=1 - true é igual ao valor 1
                    # code...
                    echo 'entrou no case 2';
                    break;
                case true: //true=1 - true é igual ao valor 1
                    # code...
                    echo 'entrou no case 2';
                    break;
                case 'abc':
                    # code...
                    echo 'entrou no case 2';
                    break;
                case 2:
                    # code...
                    echo 'entrou no case 2';
                    break;
                
                default:
                    # code...
                    break;
            }
            
        ?>


    </body>    
</html>