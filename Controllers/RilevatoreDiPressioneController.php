<?php
    use Psr\Http\Message\ResponseInterface as Response;
    use Psr\Http\Message\ServerRequestInterface as Request;
    include "RilevatoreDiPressione.php";

    class RilevatoreDiPressioneController{
        function getAllIdentificativi(Request $request, Response $response, $args){
            $rilevatoreDiPressione1 = new RilevatoreDiPressione(1, "bar", 10, 1000, "acqua");
            $rilevatoreDiPressione2 = new RilevatoreDiPressione(2, "bar", 10, 1000, "gas");
            $rilevatoreDiPressione3 = new RilevatoreDiPressione(3, "bar", 10, 1000, "acqua");

            $rilevatori = [
                $rilevatoreDiPressione1->getIdentificativo(),
                $rilevatoreDiPressione2->getIdentificativo(),
                $rilevatoreDiPressione3->getIdentificativo()
            ];

            $response->getBody()->write(json_encode($rilevatori));
            
            return $response->withHeader('Content-Type', 'application/json');
        }

        function getSpecificIdentificativo(Request $request, Response $response, $args){
            $rilevatoreDiPressione1 = new RilevatoreDiPressione(1, "bar", 10, 1000, "acqua");
            $rilevatoreDiPressione2 = new RilevatoreDiPressione(2, "bar", 10, 1000, "gas");
            $rilevatoreDiPressione3 = new RilevatoreDiPressione(3, "bar", 10, 1000, "acqua");

            $rilevatori = [
                $rilevatoreDiPressione1,
                $rilevatoreDiPressione2,
                $rilevatoreDiPressione3
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
            $rilevatoreDiPressione1 = new RilevatoreDiPressione(1, "bar", 10, 1000, "acqua");
            $rilevatoreDiPressione2 = new RilevatoreDiPressione(2, "bar", 10, 1000, "gas");
            $rilevatoreDiPressione3 = new RilevatoreDiPressione(3, "bar", 10, 1000, "acqua");

            $rilevatori = [
                $rilevatoreDiPressione1,
                $rilevatoreDiPressione2,
                $rilevatoreDiPressione3
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
            $rilevatoreDiPressione1 = new RilevatoreDiPressione(1, "bar", 10, 1000, "acqua");
            $rilevatoreDiPressione2 = new RilevatoreDiPressione(2, "bar", 10, 1000, "gas");
            $rilevatoreDiPressione3 = new RilevatoreDiPressione(3, "bar", 10, 1000, "acqua");

            $rilevatori = [
                $rilevatoreDiPressione1,
                $rilevatoreDiPressione2,
                $rilevatoreDiPressione3
            ];

            $identificativo = $args["identificativo"];
            $vMin = $args["valore_minimo"];            
        }   
    }
?>