<?php


    class Funcionario {
        //atributos
        public $nome = null;
        public $telefone = null;
        public $numFilhos = null;
        public $cargo = null;
        public $salario  = null;

        //getters setters (overloading / sobrecarga)
        function __set($atributo, $valor){
            $this->$atributo = $valor; 
        }

        function __get($atributo){
            return $this->$atributo;
        }

        //getters setters
        /*
        function setNome($nome){
            $this->nome = $nome;
        }
        function setNumFilhos($numFilhos){
            $this->numFilhos = $numFilhos;
        }
        function getNome(){
            return $this->nome;
        }
        function getNumFilhos(){
            return $this->numFilhos;
        }
        */

        //metodos
        function resumirCadFunc() {
            return $this->__get('nome') . ' possui ' .$this->__get('numFilhos') . ' filho(s)';
        }

        function modificarNumFilhos($numFilhos) {
            //afeta um atributo do objeto
            $this->numFilhos = $numFilhos;
        }
    }

    $y = new Funcionario();
    $y->__set('nome', 'jose');
    $y->__set('numFilhos', 2);
    //echo $y->__get('nome') . ' possui ' . $y->__get('numFilhos') . ' Filho(s)';
    echo '<br>';

    echo $y->resumirCadFunc();
    echo '<br>';

    $x = new Funcionario();
    $x->__set('nome', 'maria');
    $x->__set('numFilhos', 5);
    //echo $x->__get('nome') . ' possui ' . $x->__get('numFilhos') . ' Filho(s)';
    echo '<br>';

    echo $x->resumirCadFunc();
    echo '<br>';





?>