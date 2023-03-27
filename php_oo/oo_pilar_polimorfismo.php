<?php

    class Veiculo {
        //atributos
        public $placa = null;
        public $cor = null;
        

        function acelerar() {
            echo 'acelerar';
        }

        function freiar() {
            echo 'freiar';
        }

        function trocarMarcha() {
            echo 'desengatar embreagem com o pé e engatar marcha com a mão';
        }
    }

    class Carro extends Veiculo {
        //atributos
        public $teto_solar = true;

        //contructor
        function __construct($placa, $cor){
            $this->placa = $placa;
            $this->cor = $cor;
        }

        //métodos
        function abrirTetoSolar() {
            echo 'abrir teto solar';
        }

        function alterarPosicaoVolante() {
            echo 'alterar posição volante';
        }
    }

    class Moto extends Veiculo {
        //atributos
        public $contraPesoGuidao = true;

        //contructor
        function __construct($placa, $cor){
            $this->placa = $placa;
            $this->cor = $cor;
        }

        //métodos
        function empinar() {
            echo 'empinar';
        }

        function trocarMarcha() {
            echo 'desengatar embreagem com a mão e engatar marcha com o pé';
        }
    }

    class Caminhao extends Veiculo {
        //atributos
        
    }


    $carro = new Carro('abc1234', 'branco');
    $moto = new Moto('dfg4568', 'vermelho');
    $caminhao = new Caminhao();

    echo '<pre>';
    print_r($carro);
    echo '<br><br>';
    print_r($moto);
    echo '<pre>';

    echo '<hr>';
    echo $carro->abrirTetoSolar();
    echo '<br>';
    echo $carro->trocarMarcha();
    echo '<br>';
    echo $carro->freiar();

    echo '<hr>';
    echo $moto->empinar();
    echo '<br>';
    echo $moto->trocarMarcha();
    echo '<br>';
    echo $carro->freiar();

    echo '<hr>';
    echo '<br>';
    echo $caminhao->trocarMarcha();





?>