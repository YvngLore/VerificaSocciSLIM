<?php
    class Impianto implements JsonSerializable{
        protected $nome;
        protected $latitudine; 
        protected $longitudine;

        public function __construct($n, $lat, $long){
            $this->nome = $n;
            $this->latitudine = $lat;
            $this->longitudine = $long
        }

        public function getNome(){
            return $this->nome;
        }

        public function getLatitudine(){
            return $this->latitudine;
        }

        public function getLongitudine(){
            return $this->longitudine;
        }

        public function setNome($nome){
            $this->nome = $nome
        }

        public function setLatitudine($latitudine){
            $this->latitudine = $latitudine
        }

        public function setLongitudine($longitudine){
            $this->longitudine = $longitudine
        }

        public function jsonSerialize(){
            $ritorno = [
                "nome" => $this->nome,
                "latitudine" => $this->latitudine,
                "longitudine" => $this->longitudine
            ]

            return $ritorno;
        }
    }
?>