<?php
    class Fruta {
        public $nome;
        public $cor;

        function __construct($nome, $cor){
            $this->nome = $nome;
            $this->cor = $cor;
        }

        function get_name() {
            return $this->nome;
        }
    }



    $banana = new Fruta("banana", "amarelo");
    echo $banana->get_name()
?>