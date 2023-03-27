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

            $num = 1;
            //operadores comparação / logicos

            while($num <= 10) {
                
                if($num == 2 || $num == 6) {
                    # code...
                    continue;
                }
                echo $num;
                $num++;
                
                
                # code...
                
            }
            
            
        ?>
        


    </body>    
</html>