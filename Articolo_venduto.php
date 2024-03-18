<?php
include __DIR__ . '/Alunno.php';

    class Articolo implements JsonSerializable{
        protected $id;
        protected $nome;
        protected $descrizione;
        protected $prezzo_di_listino;

        public function __construct($id, $nome, $descrizione, $p_iva){
            
            $this->id = $id;
            $this->prezzo_di_vendita = $prezzo_di_vendita;
            $this->quantita_acquistata = $quantita_acquistata;
        }

        public function getId(){
            return $this->id;
        }

        public function getqQantita_di_vendita(){
            return $this->quantita_di_vendita;
        }

        public function getDescrizione(){
            return $this->quantita_acquistata;
        }

        public function getDescrizione(){
            return $this->prezzo_di_listino;
        }

        public function setId(){
            return $this->id = $id;
        }

        public function setQuantita_di_vendita(){
            return $this->quantita_di_vendita = $quantita_di_vendita;
        }

        public function setQuantita_acquistata(){
            return $this->quantita_acquistata = $quantita_acquistata;
        }

        

        public function __toString(){
            return $this->nome . " " .  $this->id . " " . $this->nome . " " . $this->descrizione . " " . $this->p_iva;
        }



    }


?>