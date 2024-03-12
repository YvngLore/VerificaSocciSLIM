<?php
    use Psr\Http\Message\ResponseInterface as Response;
    use Psr\Http\Message\ServerRequestInterface as Request;
    include "DispositivoDiAllarme.php";

    class DispositivoDiAllarmeController{
        function getAllIdentificativi(Request $request, Response $response, $args){
            $dispositivo1 = new DispositivoDiAllarme(1, 111222333);
            $dispositivo2 = new DispositivoDiAllarme(2, 444555666);
            $dispositivo3 = new DispositivoDiAllarme(3, 777888999);
            $dispositivo4 = new DispositivoDiAllarme(4, 101010101);
            $dispositivo5 = new DispositivoDiAllarme(5, 201020102);
            $dispositivo6 = new DispositivoDiAllarme(6, 301030103);
            $dispositivo7 = new DispositivoDiAllarme(7, 401040104);
            $dispositivo8 = new DispositivoDiAllarme(8, 501050105);

            $dispositivi = [
                $dispositivo1->getIdentificativo(),
                $dispositivo2->getIdentificativo(),
                $dispositivo3->getIdentificativo(),
                $dispositivo4->getIdentificativo(),
                $dispositivo5->getIdentificativo(),
                $dispositivo6->getIdentificativo(),
                $dispositivo7->getIdentificativo(),
                $dispositivo8->getIdentificativo(),
            ];

            $response->getBody()->write(json_encode($dispositivi));
            
            return $response->withHeader('Content-Type', 'application/json');
        }

        function getSpecificIdentificativo(Request $request, Response $response, $args){
            $dispositivo1 = new DispositivoDiAllarme(1, 111222333);
            $dispositivo2 = new DispositivoDiAllarme(2, 444555666);
            $dispositivo3 = new DispositivoDiAllarme(3, 777888999);
            $dispositivo4 = new DispositivoDiAllarme(4, 101010101);
            $dispositivo5 = new DispositivoDiAllarme(5, 201020102);
            $dispositivo6 = new DispositivoDiAllarme(6, 301030103);
            $dispositivo7 = new DispositivoDiAllarme(7, 401040104);
            $dispositivo8 = new DispositivoDiAllarme(8, 501050105);

            $dispositivi = [
                $dispositivo1,
                $dispositivo2,
                $dispositivo3,
                $dispositivo4,
                $dispositivo5,
                $dispositivo6,
                $dispositivo7,
                $dispositivo8,
            ];

            $identificativo = $args["identificativo"];

            for($i = 0; $i < count($dispositivi); $i++){
                if($dispositivi[$i]->getIdentificativo() == $identificativo){
                    $response->getBody()->write(json_encode($dispositivi[$i]));
                }
            }

            return $response->withHeader('Content-Type', 'application/json');
        }
    }
?>