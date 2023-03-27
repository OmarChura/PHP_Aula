<?php

    interface EquipamentoEletronicoInterface {
        public function ligar(); //metodos abstratos
        public function desligar();
    }
    //--------------------------------------------------------------------------------------

    class Geladeira implements EquipamentoEletronicoInterface  {
        public function abrirPorta() {
            echo 'abrir porta';
        }

        public function ligar() {
            echo 'ligar';
        }

        public function desligar() {
            echo 'desligar';
        }
    }

    class Tv implements EquipamentoEletronicoInterface {
        public function trocarCanal() {
            echo 'trocar canal';
        }

        public function ligar() {
            echo 'ligar';
        }

        public function desligar() {
            echo 'desligar';
        }
    }

    $x = new Geladeira();
    $y = new Tv();

    /////////////////////////////////////////////////////////////////////////////////////////////
    interface MamiferoInterface {
        public function respirar();
    }

    interface TerrestreInterface {
        public function andar();
    }

    interface AquaticoInterface {
        public function nadar();
    }


    class Humano implements MamiferoInterface, TerrestreInterface {
        public function respirar(){
            echo 'respirar';
        }

        public function andar(){
            echo 'andar';
        }

        public function conversar(){
            echo 'conversar';
        }
    }

    class Baleia implements MamiferoInterface, AquaticoInterface {
        public function respirar(){
            echo 'respirar';
        }

        public function nadar(){
            echo 'nadar';
        }

        public function esguichar(){
            echo 'esguichar';
        }
    }

    ////////////////////////////////////////////////////////////////////////////////////////
    interface AnimalInterface {
        public function comer();
    }

    interface AveInterface extends AnimalInterface {
        public function voar();
    }

    class Papagaio implements AveInterface {
        public function voar(){
            echo 'voar';
        }

        public function comer(){
            echo 'comer';
        }
    }
   
?>