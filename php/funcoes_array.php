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

            /*

            //is_array();
            $array = 'string';
            $retorno = is_array($array);

            if ($retorno) {
                # code...
                echo 'sim, é array';
            } else {
                # code...
                echo 'não, não é array';
            }
            */

            /*
            //array_keys()
            $array = [1 => 'a', 7 => 'b', 18 => 'c'];

            echo '<pre>';
            print_r($array);
            echo '<pre>';

            $chaves_array = array_keys($array);

            echo '<pre>';
            print_r($chaves_array);
            echo '<pre>';
            */

            /*
            //sort()
            $array = array('mouse','cabo hdmi','gabinete','teclado','fonte atx','notebook');

            echo '<pre>';
            print_r($array);
            echo '<pre>';

            echo sort($array); //true ou false

            echo '<pre>';
            print_r($array);
            echo '<pre>';

            */

            /*
            //asort()
            $array = array('mouse','cabo hdmi','gabinete','teclado','fonte atx','notebook');

            echo '<pre>';
            print_r($array);
            echo '<pre>';

            echo asort($array); //true ou false

            echo '<pre>';
            print_r($array);
            echo '<pre>';
            */

            /*
            //count()
            $array = array('mouse','cabo hdmi','gabinete','teclado','fonte atx','notebook');

            echo '<pre>';
            print_r($array);
            echo '<pre>';

            echo asort($array); //true ou false

            echo '<pre>';
            print_r($array);
            echo count($array);
            echo '<pre>';
            */

            /*
            //array_merge()
            $array1 = array('fonte atx','notebook');
            $array2 = array('cabo hdmi');
            $array3 = array('mouse');

            $array = array_merge($array1, $array2, $array3);

            echo '<pre>';
            print_r($array);
            echo '<pre>';
            */

            /*
            //explode()

            $string = '26/04/2018';
            $array_retorno = explode('/', $string);

            echo '<pre>';
            echo $string;
            print_r($array_retorno);
            echo $array_retorno[2].'/'.$array_retorno[1]. '/' . $array_retorno[0] ;
            echo '<pre>';
            */

            //implode()
            $array = ['a', 'b', 'c', 'x'];
            $retorno = implode('-', $array);

            echo $retorno;

            
            
            
        ?>
        


    </body>    
</html>