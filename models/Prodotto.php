<?php

    class Prodotto {
        private $nome;
        private $prezzo;
        private $categoria;

        // COSTRUTTORE.
        public function __construct($nome, $prezzo, Categoria $categoria)
        {
            $this -> nome = $nome;
            $this-> prezzo = $prezzo;
            $this-> categoria = $categoria;
        }


        //funzione GET nome dall'istanza
        public function getNomeProdotto(){
            return $this->nome;
        }

        //funzione GET prezzo dall'istanza
        public function getPrezzoProdotto(){
            return $this-> prezzo;
        }

        //funzione GET categoria dall'istanza
        public function getNomeCatgoria(){
            return $this-> nome;
        }




    }

?>