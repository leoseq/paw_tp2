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
    'GET /'            => 'ListaTurnoController@index',
    'GET /new_turno'   => 'TurnoController@new',
    'GET /save_turno' => 'TurnoController@save',
]);

$request = new Request;
