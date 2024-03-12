<?php
use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;
use Slim\Factory\AppFactory;

require __DIR__ . '/vendor/autoload.php';

include_once "Controllers/SiteController.php";
include_once "Controllers/ImpiantoController.php";

$app = AppFactory::create();

$app->get("/", "SiteController:index");
$app->get("/impianto", "ImpiantoController:getImpianto");



$app->run();
