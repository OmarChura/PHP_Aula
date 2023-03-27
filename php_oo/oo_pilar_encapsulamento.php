<?php

    class Pai{
        //atributos
        private $nome = null;
        protected $sobrenome = null;
        public $humor = null;
        

        public function __get($attr) {
            return $this->$attr;
        }

        public function __set($attr, $value) {
            $this->$attr = $value;
        }

        private function executarMania() {
            echo 'assobiar';
        }

        protected function responder() {
            echo 'oi';
        }

        public function executarAcao() {
            $x = rand(1,10);
            if ($x >= 1 && $x <= 6) {
                # code...
                $this->responder();

            } else {
                # code...
                $this->executarMania();
            }
            echo '<br>';
            $this->executarMania();
            echo '<br>';
            $this->responder();
            
        }
    }

    class Filho extends Pai {

        public function __construct(){
            //exibe metodos do objeto
            echo '<pre>';
            print_r(get_class_methods($this));
            echo '<pre>';
        }

        private function executarMania() {
            echo 'cantar';
        }

        public function x() {
            echo $this->executarMania();
        }

        protected function responder() {
            echo 'ola';
        }

        /*
        public function getAtributo($attr){
            return $this->$attr;
        }

        public function setAtributo($attr, $value){
            $this->$attr = $value;
        }
        */
        /*
        public function __get($attr) {
            return $this->$attr;
        }

        public function __set($attr, $value) {
            $this->$attr = $value;
        }
        */
    }

    /*
    $pai = new Pai();
    echo $pai->__get('nome');
    $pai->__set('nome', 'maria');
    echo '<br>';
    echo $pai->__get('nome');

    $pai->nome = 'milena';
    echo '<br>';
    echo $pai->nome;
    echo '<br>';
    echo $pai->executarAcao();
    */

    $filho = new Filho();
    echo '<pre>';
    print_r($filho);
    echo '<pre>';
    //echo $filho->getAtributo('nome');
    echo '<br>';
    echo '<pre>';
    //print_r($filho);
    echo '<pre>';
    //$filho->setAtributo('nome', 'pereira');
    echo '<br>';
    //echo $filho->getAtributo('nome');

    echo '<br>';
    echo '<pre>';
    print_r(get_class_methods($filho));
    echo '<pre>';
    echo '<br>';
    $filho->executarAcao();
    echo '<br>';
    $filho->x();



    /*
    echo $filho->__get('nome');
    echo '<br>';
    echo $filho->__set('nome', 'omar');
    echo '<br>';
    echo $filho->__get('nome');

    echo '<pre>';
    print_r($filho);
    echo '<pre>';
*/

?>