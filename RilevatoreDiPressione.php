<?php
    include_once "Rilevatore.php";

    class RilevatoreDiPressione extends Rilevatore implements JsonSerializable{
        protected $tipologia;
        
        public function __construct($id, $mis, $um, $sa, $cs, $tip){
            parent::__construct($id, $mis, $um, $sa, $cs);
            $this->tipologia = $tip;
        }

        public function getTipologia(){
            return $this->tipologia;
        }

        public function setTipologia($tipologia){
            $this->tipologia = $tipologia;
        }

        public function jsonSerialize(){
            $ritorno = [
                "identificativo" => parent::getIdentificativo(),
                "misurazioni" => parent::getMisurazioni(),
                "unitaMisura" => parent::getUnitaMis(),
                "sogliaAllarme" => parent::getSogliaAllarme(),
                "codiceSeriale" => parent::getCodiceSeriale(),
                "tipologia" => $this->tipologia
            ];

            return $ritorno;
        }
    }
?>
