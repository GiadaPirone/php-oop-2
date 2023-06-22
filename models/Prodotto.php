<?php

    class Prodotto {
        private $nome;
        private $prezzo;
        private $categoria;
        public $img;

        // COSTRUTTORE.
        public function __construct($nome, $prezzo, Categoria $categoria, $img)
        {
            $this -> nome = $nome;
            $this-> prezzo = $prezzo;
            $this-> categoria = $categoria;
            $this-> img = $img; 
        }


        //funzione GET nome dall'istanza
        public function getNomeProdotto(){
            return $this->nome;
        }

        //funzione GET prezzo dall'istanza
        public function getPrezzoProdotto(){
            return $this-> prezzo;
        }

        // public function getImg(){
        //     return $this-> img;
        // }


       



    }

?>