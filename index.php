<?php
use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;
use Slim\Factory\AppFactory;

require __DIR__ . '/vendor/autoload.php';

include_once "Controllers/SiteController.php";
include_once "Controllers/ImpiantoController.php";
include_once "Controllers/DispositivoDiAllarmeController.php";
include_once "Controllers/RilevatoreDiPressioneController.php";

$app = AppFactory::create();

$app->get("/", "SiteController:index");
$app->get("/impianto", "ImpiantoController:getImpianto");
$app->get("/dispositivi_di_allarme", "DispositivoDiAllarmeController:getAllIdentificativi");
$app->get("/dispositivi_di_allarme/{identificativo}", "DispositivoDiAllarmeController:getSpecificIdentificativo");
$app->get("/rilevatori_di_pressione", "RilevatoreDiPressioneController:getAllIdentificativi");
$app->get("/rilevatori_di_pressione/{identificativo}", "RilevatoreDiPressioneController:getSpecificIdentificativo");
$app->get("/rilevatori_di_pressione/{identificativo}/misurazioni", "RilevatoreDiPressioneController:getMisurazioni");
$app->get("/rilevatori_di_pressione/{identificativo}/misurazioni/maggiore_di/{valore_minimo}", "RilevatoreDiPressioneController:getMisurazioneMaggioreValore");
$app->get("/rilevatori_di_umidita", "RilevatoreDiPressioneController:getAllIdentificativi");
$app->get("/rilevatori_di_umidita/{identificativo}", "RilevatoreDiPressioneController:getSpecificIdentificativo");
$app->get("/rilevatori_di_umidita/{identificativo}/misurazioni", "RilevatoreDiPressioneController:getMisurazioni");
$app->get("/rilevatori_di_umidita/{identificativo}/misurazioni/maggiore_di/{valore_minimo}", "RilevatoreDiPressioneController:getMisurazioneMaggioreValore");




$app->run();
