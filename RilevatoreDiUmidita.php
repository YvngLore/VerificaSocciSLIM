<?php
    include_once "Rilevatore.php";

    class RilevatoreDiUmidita extends Rilevatore implements JsonSerializable{
        protected $posizione;
        
        public function __construct($id, $mis, $um, $sa, $cs, $pos){
            parent::__construct($id, $mis, $um, $sa, $cs);
            $this->posizione = $pos;
        }

        public function getPosizione(){
            return $this->posizione;
        }

        public function setPosizione($posizione){
            $this->posizione = $posizione;
        }

        public function jsonSerialize(){
            $ritorno = [
                "identificativo" => parent::getIdentificativo(),
                "misurazioni" => parent::getMisurazioni(),
                "unitaMisura" => parent::getUnitaMis(),
                "sogliaAllarme" => parent::getSogliaAllarme(),
                "codiceSeriale" => parent::getCodiceSeriale(),
                "posizione" => $this->posizione
            ];

            return $ritorno;
        }
    }
?>