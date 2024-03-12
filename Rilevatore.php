<?php
    class Rilevatore {
        protected $identificativo;
        protected $misurazioni; 
        protected $unitaMisura;
        protected $sogliaAllarme;
        protected $codiceSeriale;

        public function __construct($id, $mis, $um, $sa, $cs){
            $this->identificativo = $id;
            $this->misurazioni = $mis;
            $this->unitaMisura = $um;
            $this->sogliaAllarme = $sa;
            $this->codiceSeriale = $cs;
        }

        public function getIdentificativo(){
            return $this->identificativo;
        }

        public function getMisurazioni(){
            return $this->misurazioni;
        }

        public function getUnitaMisura(){
            return $this->unitaMisura;
        }

        public function getSogliaAllarme(){
            return $this->sogliaAllarme;
        }

        public function getCodiceSeriale(){
            return $this->codiceSeriale;
        }

        public function setIdentificativo($identificativo){
            $this->identificativo = $identificativo;
        }

        public function setMisurazioni($misurazioni){
            $this->misurazioni = $misurazioni;
        }

        public function setUnitaMisura($unitaMisura){
            $this->unitaMisura = $unitaMisura;
        }

        public function setSogliaAllarme($sogliaAllarme){
            $this->sogliaAllarme = $sogliaAllarme;
        }

        public function setCodiceSeriale($codiceSeriale){
            $this->codiceSeriale = $codiceSeriale;
        }
    }
?>