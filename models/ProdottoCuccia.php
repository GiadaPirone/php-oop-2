<?php

    class ProdottoCuccia extends Prodotto{
        private $modello;
        private $materiale;
        private $dimensioni;

        function __construct($nome, $prezzo, Categoria $categoria,$img, $modello, $materiale, $dimensioni)
        {
            parent::__construct($nome, $prezzo, $categoria,$img);

            $this-> modello = $modello;
            $this-> materiale = $materiale;
            $this-> dimensioni = $dimensioni;
        }

        public function getModello(){
            return $this->modello;
        }

        public function getMateriale(){
            return $this->materiale;
        }

        public function getDimensioni(){
            return $this->dimensioni;
        }


    }

?>