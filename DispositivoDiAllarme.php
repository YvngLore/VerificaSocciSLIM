<?php
    class DispositivoDiAllarme implements JsonSerializable{
        protected $identificativo;
        protected $numero_di_telefono;

        public function __construct($id, $num){
            $this->identificativo = $id;
            $this->numero_di_telefono = $num;
        }

        public function getIdentificativo(){
            return $this->identificativo;
        }

        public function getNumeroDiTelefono(){
            return $this->numero_di_telefono;
        }

        public function setNumeroDiTelefono($numero_di_telefono){
            $this->numero_di_telefono = $numero_di_telefono;
        }

        public function setIdentificativo($identificativo){
            $this->identificativo = $identificativo;
        }

        public function toString(){
            return "Identificativo: $this->identificativo <br> Numero di Telefono: $this->numero_di_telefono";
        }

        public function jsonSerialize(){
            $ritorno = [
                "identificativo" => $this->identificativo,
                "numero_di_telefono" => $this->numero_di_telefono
            ];

            return $ritorno;
        }
    }
?>