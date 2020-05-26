<?php

namespace App\controllers;

use App\core\Controller;
use App\models\ListaTurno;

class TurnoController extends Controller
{
    public function new()
    {
        include "views/new.turno.view.php";
    }

    public function save()
    {
        $lista_turnos = new ListaTurno;

        $datos = [];        
        $datos['nombre'] = $_GET["nombre"];
        $datos['email'] = $_GET["email"];
        $datos['telefono'] = $_GET["telefono"];
        $datos['edad'] = $_GET["edad"];
        $datos['talla_calzado'] = $_GET["talla_calzado"];
        $datos['altura'] = $_GET["altura"];
        $datos['fecha_nacimiento'] = $_GET["fecha_nacimiento"];
        $datos['color_pelo'] = $_GET["color_pelo"];
        $datos['fecha_turno'] = $_GET["fecha_turno"];
        $datos['hora_turno'] = $_GET["hora_turno"];
        
        $message = $lista_turnos->crear_turno($datos);
        
        $this->add_message($message);            

        include "views/index.view.php";
    }
}
