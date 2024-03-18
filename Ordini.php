<?php
include __DIR__ . '/Alunno.php';

    class Ordini implements JsonSerializable{
        protected $numero_ordine;
        protected $data;
        protected $importo_totale;
        protected $articoli_venduti = [];

        public function __construct($numero_ordine, $data, $importo_totale, $p_iva){
            
            $this->numero_ordine = $numero_ordine;
            $this->data = $data;
            $this->importo_totale = $importo_totale;
        }

        public function add_articolo(Articolo $articolo){
            $this->articoli_venduti[]=$articolo;
        }

        public function getNumero_ordine(){
            return $this->numero_ordine;
        }

        public function getData(){
            return $this->data;
        }

        public function getImporto_totale(){
            return $this->importo_totale;
        }

        public function setNumero_ordine(){
            return $this->numero_ordine = $numero_ordine;
        }

        public function setData(){
            return $this->data = $data;
        }

        public function setImporto_totale(){
            return $this->importo_totale = $importo_totale;
        }

        public function __toString(){
            return $this->nome . " " .  $this->numero_ordine . " " . $this->data . " " . $this->importo_totale . " " . $this->p_iva;
        }



    }


?>