<?php
include __DIR__ . '/Alunno.php';

    class Articolo implements JsonSerializable{
        protected $id;
        protected $nome;
        protected $descrizione;
        protected $prezzo_di_listino;

        public function __construct($id, $nome, $descrizione, $p_iva){
            
            $this->id = $id;
            $this->nome = $nome;
            $this->descrizione = $descrizione;
            $this->prezzo_di_listino = $prezzodi_listino;
        }

        public function getId(){
            return $this->id;
        }

        public function getNome(){
            return $this->nome;
        }

        public function getDescrizione(){
            return $this->descrizione;
        }

        public function getDescrizione(){
            return $this->prezzo_di_listino;
        }

        public function setId(){
            return $this->id = $id;
        }

        public function setNome(){
            return $this->nome = $nome;
        }

        public function setDescrizione(){
            return $this->descrizione = $descrizione;
        }

        public function setPrezzo_di_listino(){
            return $this->prezzo_di_listino = $descrizione;
        }

        public function __toString(){
            return $this->nome . " " .  $this->id . " " . $this->nome . " " . $this->descrizione . " " . $this->p_iva;
        }



    }


?>