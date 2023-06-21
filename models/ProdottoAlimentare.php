<?php

    class ProdottoAlimentare extends Prodotto{
        private $tipologia;
        private $gusto;

        function __construct($nome, $prezzo, Categoria $categoria, $tipologia, $gusto = null)
        {
            parent::__construct($nome, $prezzo, $categoria);

            $this->tipologia = $tipologia;
            $this-> gusto = $gusto;
        }

        public function getTipoAlimento(){
            return $this->tipologia;
        }

        public function getGustoAlimento(){
            return $this->gusto;
        }
    }

?>