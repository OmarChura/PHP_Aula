<?php


    class Pessoa {
        //atributos
        public $nome = null;

        function __construct($nome){
            echo 'sadasd';
            $this->nome = $nome;
        }

        function __destruct(){
            echo 'removido';
        }

        function __get($atributo){
            return $this->$atributo;
        }

        function correr(){
            return $this->__get('nome') . ' está correndo';
        }

        
    }

    $pessoa = new Pessoa('jorge');
    echo '<br>Nome:' . $pessoa->__get('nome');
    echo '<br>' . $pessoa->correr();
    echo '<br>';
    //unset($pessoa);//remove objeto


?>