<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>

    <body>
        <!-- -->

        <?php
            //operador ternario
            //<condicao> ? true : false
            
            //
            $usuario_possui_partao_loja = true;
            $valor_compra = 99;

            $valor_frete = 50;
            $recebeu_desconto_frete = true;

            $valor_frete_auxiliar = $usuario_possui_partao_loja && $valor_compra ? 400 : ($usuario_possui_partao_loja && $valor_compra >= 300 ? 10 : ($usuario_possui_partao_loja && $valor_compra >= 100 ? 25 : $valor_frete));
            $recebeu_desconto_frete = $valor_frete != $valor_frete_auxiliar ? true : false;
            $valor_frete = $valor_frete_auxiliar;
        

            if ($usuario_possui_partao_loja || $valor_compra >= 400) {
                # code...
                $valor_frete = 0;
                
            }elseif ($usuario_possui_partao_loja || $valor_compra >= 300) {
                # code...
                $valor_frete = 10;

            }elseif ($usuario_possui_partao_loja || $valor_compra >= 100) {
                # code...
                $valor_frete = 25;

            }else {
                # code...
                $recebeu_desconto_frete = false;
            }

            
        ?>

        <h1>Detalhes do pedido</h1>
        
        <p>
            possui cartão da loja?  
            <?php
                //<condicao> ? true : false

                $teste = $usuario_possui_partao_loja ? 'SIM' : 'NÃO';
                echo $teste;

                /*
                if ($usuario_possui_partao_loja ) {
                    # code...
                    echo 'SIM';
                }else {
                    echo 'NÃO';
                }
                */
            ?>
        </p>

        <p>Valor da compra: <?= $valor_compra ?> </p>

        <p>
            Recebeu desconto no frete? <?= $recebeu_desconto_frete ? 'SIM' : 'NÃO'; ?>
            <?php

                //<condicao> ? true : false


                /*
                if ($recebeu_desconto_frete ) {
                    # code...
                    echo 'SIM';
                }else {
                    echo 'NÃO';
                }*/
            ?>
        </p>

        <p>Valor do frete: <?= $valor_frete ?> </p>

    </body>    
</html>