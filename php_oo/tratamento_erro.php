<?php

    //logica
    try {
        //code... logica
        echo '<h3> try <h3>';

        //$sql = 'Slect * from clientes';
        //mysql_query($sql); //erro

        if(!file_exists('require_arquivo_a.php')) {
            //throw  new Exception(' Erro' . date('d/m/Y H:i:s'));
            throw new Exception(' Erro' . date('d/m/Y H:i:s'));
        }

    } catch (Error $e) {
        //throw $th; 
        echo '<h3> catch erro<h3>';
        echo $e;
        //armazenando esse erro em banco de dados
    }catch(Exception $e){
        echo '<h3> catch exception <h3>';
        echo $e;
        //armazenando esse erro em banco de dados
    }
    finally{
        echo '<h3> finally <h3>';
    }
    



?>