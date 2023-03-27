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

            /*
            //recuperação da data atual / data corrente
            //dia: d, D
            
            echo date('d/m/Y  H:i') . '<br>'; // dia/mes/ano horas:minutos

            echo date_default_timezone_get() . '<br>';

            echo date_default_timezone_set('America/Sao_Paulo') . '<br>';// atualizar o timezone

            echo date('d/m/Y  H:i') . '<br>';
            
            */

            //para converte data tem que ser no padrão americano ano/mes/dia
            $data_inicial = '2018-04-24';
            $data_final = '2018-05-15';

            //timestamp
            //01/01/1970
            //01/01/1970 -- 2018-04-24 (js-milisegundos / php-segundos)

            $time_inicial = strtotime($data_inicial);
            $time_final = strtotime($data_final);

            echo $data_inicial . ' / ' . $time_inicial;
            echo '<br>';
            echo $data_final . ' / ' . $time_final;
            echo '<br>';

            $diferenca_times = $time_final - $time_inicial; //abs

            echo 'diferença de segundos entre data final e data inicial é ' . $diferenca_times;
            echo '<br>';

            $segundos_existem_dia = 24*60*60;
            echo 'segundos em um dia  é ' . $segundos_existem_dia . ' segundos';
            echo '<br>';

            $diferenca_dias_entre_as_datas = $diferenca_times / $segundos_existem_dia;
            echo 'a diferença em dia é ' . $diferenca_dias_entre_as_datas . 'dias';
            echo '<br>';
            
        ?>
        


    </body>    
</html>