<?php

    class ProdottoGioco extends Prodotto{
        private $colore;
        private $forma;
        private $dimensione;

        function __construct( $nome, $prezzo, Categoria $categoria, $img, $colore, $forma )
        {
            parent::__construct($nome, $prezzo, $categoria, $img);

            $this->colore = $colore;
            $this->forma = $forma;
        }

        public function getColoreGioco(){
            return $this->colore;
        }

        public function getFormaGioco(){
            return $this->forma;
        }
    }


    
?>