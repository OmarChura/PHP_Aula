<?php

    class Exemplo{
        public static $atributo1 = 'estatico';
        public $atributo2 = 'normal';

        public static function metodo1(){
            //echo $this->atributo2; //erro, metodo statico
            echo 'estatico';
        }
        
        public function metodo2(){
            echo 'normal';
        }
        
    }

    //$x = new Exemplo();
    /*
    echo Exemplo::$atributo1;
    echo '<br>';
    Exemplo::metodo1();
    */

    //echo Exemplo::$atributo2;
    echo '<br>';
    Exemplo::metodo1();

    //echo $x->atributo2;
    echo '<br>';
?>