<?php
    class Ordini_fisici extends Ordini implements JsonSerializable{
        protected $pagamento;


        public function getPagamento(){
            return $this->pagamento;
        }

        public function setPagamento(){
            return $this->pagamento = $pagamento;
        }

        public function __toString(){
            return $this->pagamento;
        }

    }


?>