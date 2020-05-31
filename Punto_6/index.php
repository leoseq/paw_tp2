<?php


include 'setup.php';

use App\models\Turno;
use App\models\Serializar;


try{
    $router->direct($request);
} catch (Error $e) {
    error_log($e);
    http_response_code(404);
    include "views/error.404.view.php";
}
