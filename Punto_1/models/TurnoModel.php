<?php

namespace App\models;

class Turno
{
    public $nombre;
    public $email;
    public $telefono;
    public $edad;
    public $talla_calzado;
    public $altura;
    public $fecha_nacimiento;
    public $color_pelo;
    public $fecha_turno;
    public $hora_turno;

    public function __construct($datos)
    {
        $this->nombre = $datos['nombre'];
        $this->email = $datos['email'];
        $this->telefono = $datos['telefono'];
        $this->edad = $datos['edad'];
        $this->talla_calzado = $datos['talla_calzado'];
        $this->altura = $datos['altura'];
        $this->fecha_nacimiento = $datos['fecha_nacimiento'];
        $this->color_pelo = $datos['color_pelo'];
        $this->fecha_turno = $datos['fecha_turno'];
        $this->hora_turno = $datos['hora_turno'];

        $this->validar_datos($datos);
    }

    public function validar_datos($datos)
    {
        $booleano = true;

        if (empty($datos["nombre"])) {
            echo "El nombre es obligatorio... <br>";
            $booleano= false;
        }
        if (!filter_var($datos["email"], FILTER_VALIDATE_EMAIL) || !isset($datos["email"]) ) {
            echo "El formato del email no es correcto o es obligatorio... <br>";
            $booleano= false;
        }
        if (!filter_var($datos["telefono"], FILTER_VALIDATE_INT) || empty($datos["telefono"])) {
            echo "No se ha indicado telefono o el formato no es correcto <br>";
            $booleano= false;
        }
        if (!filter_var($datos["edad"], FILTER_VALIDATE_INT) || $datos["edad"]<1 || $datos["edad"]>131) {
            echo "El formato de la edad no es correcto <br>";
            $booleano= false;
        }
        if (!filter_var($datos["talla_calzado"], FILTER_VALIDATE_INT) || $datos["talla_calzado"]>45 || $datos["talla_calzado"]<20) {
            echo "el formato de la talla del calzado no es correcto <br>";
            $booleano= false;
        }
        if (!filter_var($datos["altura"], FILTER_VALIDATE_INT) || $datos["altura"]>200 || $datos["altura"]<100) {
            echo "el formato de la altura no es correcto <br>";
            $booleano= false;
        }
        if ($datos["color_pelo"] != "negro" && $datos["color_pelo"] != "rubio" && $datos["color_pelo"] != "castanio" && $datos["color_pelo"] != "pelirrojo") {
            echo "No se ha indicado color de pelo(morocho,rubio,colorado,casta&ntilde;o) o el formato no es correcto <br>";
            $booleano= false;
        }
        $pattern="/^([0][8-9]|[1][0-7])[\:]([0-5][0-9])$/";
        if (empty($datos["horario_turno"]) || !preg_match($pattern, $datos["horario_turno"])) {
            echo "No se ha indicado el horario o el formato no es correcto <br>";
            $booleano= false;
        }

        //SI TODOS LOS CAMPOS ESTAN OK
        if ($booleano) {
            echo "SE REGISTRO EL TURNO <br>";
        } else {
            echo "NO SE REGISTRO EL TURNO <br>";
        }
    }

}