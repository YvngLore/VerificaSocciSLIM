<?php
    use Psr\Http\Message\ResponseInterface as Response;
    use Psr\Http\Message\ServerRequestInterface as Request;
    include "RilevatoreDiUmidita.php";

    class RilevatoreDiUmiditaController{
        function getAllIdentificativi(Request $request, Response $response, $args){
            $rilevatoreDiUmidita1 = new RilevatoreDiUmidita(1, "%", 10, 1000, "terra");
            $rilevatoreDiUmidita2 = new RilevatoreDiUmidita(2, "%", 10, 1000, "aria");
            $rilevatoreDiUmidita3 = new RilevatoreDiUmidita(3, "%", 10, 1000, "terra");

            $rilevatori = [
                $rilevatoreDiUmidita1->getIdentificativo(),
                $rilevatoreDiUmidita2->getIdentificativo(),
                $rilevatoreDiUmidita3->getIdentificativo()
            ];

            $response->getBody()->write(json_encode($rilevatori));
            
            return $response->withHeader('Content-Type', 'application/json');
        }

        function getSpecificIdentificativo(Request $request, Response $response, $args){
            $rilevatoreDiUmidita1 = new RilevatoreDiUmidita(1, "%", 10, 1000, "terra");
            $rilevatoreDiUmidita2 = new RilevatoreDiUmidita(2, "%", 10, 1000, "aria");
            $rilevatoreDiUmidita3 = new RilevatoreDiUmidita(3, "%", 10, 1000, "terra");

            $rilevatori = [
                $rilevatoreDiUmidita1,
                $rilevatoreDiUmidita2,
                $rilevatoreDiUmidita3
            ];

            $identificativo = $args["identificativo"];

            foreach($rilevatori as $index => $value){
                if($index == $identificativo){
                    $response->getBody()->write(json_encode($rilevatori[$index]));
                }
            }
            
            return $response->withHeader('Content-Type', 'application/json');
        }

        function getMisurazioni(Request $request, Response $response, $args){
            $rilevatoreDiUmidita1 = new RilevatoreDiUmidita(1, "%", 10, 1000, "terra");
            $rilevatoreDiUmidita2 = new RilevatoreDiUmidita(2, "%", 10, 1000, "aria");
            $rilevatoreDiUmidita3 = new RilevatoreDiUmidita(3, "%", 10, 1000, "terra");

            $rilevatori = [
                $rilevatoreDiUmidita1,
                $rilevatoreDiUmidita2,
                $rilevatoreDiUmidita3
            ];

            $identificativo = $args["identificativo"];

            foreach($rilevatori as $index => $value){
                if($index == $identificativo){
                    $response->getBody()->write(json_encode($rilevatori[$index]->getMisurazioni()));
                }
            }

            return $response->withHeader('Content-Type', 'application/json');
        }

        function getMisurazioneMaggioreValore(Request $request, Response $response, $args){
            $rilevatoreDiUmidita1 = new RilevatoreDiUmidita(1, "%", 10, 1000, "terra");
            $rilevatoreDiUmidita2 = new RilevatoreDiUmidita(2, "%", 10, 1000, "aria");
            $rilevatoreDiUmidita3 = new RilevatoreDiUmidita(3, "%", 10, 1000, "terra");

            $rilevatori = [
                $rilevatoreDiUmidita1,
                $rilevatoreDiUmidita2,
                $rilevatoreDiUmidita3
            ];

            $identificativo = $args["identificativo"];
            $vMin = $args["valore_minimo"];            
        }   
    }
?>