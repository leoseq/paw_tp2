<?php

include 'core/Router.php';
include 'core/Request.php';
include 'core/Controller.php';
include 'models/ListaTurnoModel.php';
include 'models/TurnoModel.php';
include 'controllers/ListaTurnoController.php';
include 'controllers/TurnoController.php';

use App\core\Router;
use App\core\Request;

$router = new Router;
$router->define([
    'GET /PAW/paw_tp2/Punto_1/' => 'ListaTurnoController@index',
    'GET /new_turno'            => 'TurnoController@new',
    'POST /save_turno'          => 'TurnoController@save',
]);

$request = new Request;
