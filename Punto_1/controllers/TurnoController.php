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
        $datos['nombre'] = $_POST["nombre"];
        $datos['email'] = $_POST["email"];
        $datos['telefono'] = $_POST["telefono"];
        $datos['edad'] = $_POST["edad"];
        $datos['talla_calzado'] = $_POST["talla_calzado"];
        $datos['altura'] = $_POST["altura"];
        $datos['fecha_nacimiento'] = $_POST["fecha_nacimiento"];
        $datos['color_pelo'] = $_POST["color_pelo"];
        $datos['fecha_turno'] = $_POST["fecha_turno"];
        $datos['hora_turno'] = $_POST["hora_turno"];
        
        $lista_turnos->crear_turno($datos);
        
        include "views/index.view.php";
    }
}
