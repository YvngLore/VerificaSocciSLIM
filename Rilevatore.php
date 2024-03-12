<?php
    class Rilevatore {
        protected $identificativo;
        protected $misurazioni; 
        protected $unitaMisura;
        protected $sogliaAllarme;
        protected $codiceSeriale;

        public function __construct($id, $um, $sa, $cs){
            $this->identificativo = $id;
            $this->misurazioni = [
                "01-01-2023" => 3,
                "10-01-2023" => 5,
                "05-03-2023" => 9,
                "13-05-2023" => 10,
                "15-06-2023" => 21,
                "18-07-2023" => 25,
                "19-09-2023" => 19,
                "19-11-2023" => 20,
            ];
            $this->unitaMisura = $um;
            $this->sogliaAllarme = $sa;
            $this->codiceSeriale = $cs;
        }

        public function getMin(){
            $i = 0;
            $valori = [];

            foreach($this->misurazioni as $index => $value){
                if($this->misurazioni[$index] > $value){
                    $valori[$i] = $this->misurazioni[$index];
                }
            }

            return $valori;
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

        public function setMisurazioni($date, $value){
            $this->misurazioni[$date] = $value;
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