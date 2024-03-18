<?php
    class Negozio implements JsonSerializable{
        protected $nome;
        protected $telefono;
        protected $indirizzo;
        protected $url;
        protected $p_iva;

        public function __construct(){
            $this->nome = "Negozio1";
            $this->telefono = "123456";
            $this->indirizzo = "via ciro";
            $this->url = "ldlld";
            $this->p_iva = "334225";

            $articolo1 = new Articolo("1", "dado", "rosso", 18);
            $articolo2 = new Articolo("2", "forbici", "nero", 4);
            $articolo3 = new Articolo("3", "laser", "verde", 23);
            array_push($this->alunni, $alunno1);
            array_push($this->alunni, $alunno2);
            array_push($this->alunni, $alunno3);

            $ordine1 = new Ordine("1", "12 gen", 18);
            $ordine2 = new Ordine("2", "forbici", "nero", 4);
            $ordine3 = new Ordine("3", "laser", "verde", 23);
            array_push($this->alunni, $alunno1);
            array_push($this->alunni, $alunno2);
            array_push($this->alunni, $alunno3);

        }

    }    

?>