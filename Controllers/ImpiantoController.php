<?php
    use Psr\Http\Message\ResponseInterface as Response;
    use Psr\Http\Message\ServerRequestInterface as Request;
    include "Impianto.php";

    class ImpiantoController{
        function getImpianto(Request $request, Response $response, $args){
            $impianto = new Impianto("Prova", 13, 149);
            $response->getBody()->write(json_encode($impianto));
            return $response->withHeader('Content-Type', 'application/json');
        }
    }
?> 