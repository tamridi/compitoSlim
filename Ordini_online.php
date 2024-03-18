<?php
    class Ordini_online extends Ordini implements JsonSerializable{
        protected $indirizzo_IP;
        protected $codice_di_autorizzazione;


        public function getIndirizzo_IP(){
            return $this->indirizzo_IP;
        }

        public function getIndirizzo_IP(){
            return $this->codice_di_autorizzazione;
        }

        public function setIndirizzo_IP(){
            return $this->indirizzo_IP = $indirizzo_IP;
        }

        public function setCodice_di_autorizzazione(){
            return $this->codice_di_autorizzazione = $codice_di_autorizzazione;
        }

        public function __toString(){
            return $this->indirizzo_IP ." ". $this->codice_di_autorizzazione;
        }

    }


?>