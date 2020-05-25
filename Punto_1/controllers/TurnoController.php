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

        $nombre = $_POST["nombre"];
        $email = $_POST["email"];
        $telefono = $_POST["telefono"];
        $edad = $_POST["edad"];
        $talla_calzado = $_POST["talla_calzado"];
        $altura = $_POST["altura"];
        $fecha_nacimiento = $_POST["fecha_nacimiento"];
        $color_pelo = $_POST["color_pelo"];
        $fecha_turno = $_POST["fecha_turno"];
        $hora_turno = $_POST["hora_turno"];
       /* 
        echo 'Nombre: '.$nombre.'<br>';
        echo 'Email: '.$email.'<br>';
        echo 'Telefono: '.$telefono.'<br>';
        echo 'Edad: '.$edad.'<br>';
        echo 'Talla: '.$talla_calzado.'<br>';
        echo 'Altura: '.$altura.'<br>';
        echo 'Fecha Nacimiento: '.$fecha_nacimiento.'<br>';
        echo 'Color de Pelo: '.$color_pelo.'<br>';
        echo 'Fecha de Turno: '.$fecha_turno.'<br>';
        echo 'Hora de Turno: '.$hora_turno.'<br>';
*/
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
