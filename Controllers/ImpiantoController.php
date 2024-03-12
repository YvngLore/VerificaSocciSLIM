<?php
    use Psr\Http\Message\ResponseInterface as Response;
    use Psr\Http\Message\ServerRequestInterface as Request;
    include_once "../Impianto.php";

    class ImpiantoController{
        function getImpianto(Request $request, Response $response, $args){
            $impianto = new Impianto("Prova", 13, 149);
            $response->getBody()->write($impianto->toString());
            return $response;
        }
    }
?> 