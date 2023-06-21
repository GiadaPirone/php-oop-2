<?php

    class Categoria{
        public $nome;
        public $icona;
        public $descrizione;

        function __construct($nome)
        {
            $this->nome = $nome;
        }

        //funzione GET categoria dall'istanza
        public function getNomeCatgoria(){
            return $this-> nome;
        }

    }

?>