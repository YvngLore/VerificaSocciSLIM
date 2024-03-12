<?php
use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;
use Slim\Factory\AppFactory;

require __DIR__ . '/vendor/autoload.php';

include_once "Controllers/SiteController.php";
include_once "Controllers/ImpiantoController.php";
include_once "Controllers/DispositivoDiAllarmeController.php";

$app = AppFactory::create();

$app->get("/", "SiteController:index");
$app->get("/impianto", "ImpiantoController:getImpianto");
$app->get("/dispositivi_di_allarme", "DispositivoDiAllarmeController:getAllIdentificativi");
$app->get("/dispositivi_di_allarme/{identificativo}", "DispositivoDiAllarmeController:getSpecificIdentificativo");
$app->get("/rilevatori_di_pressione", "RilevatoreDiPressioneController:getAllIdentificativi");

$app->run();
