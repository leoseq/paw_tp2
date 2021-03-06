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

        // Validacion de Nombre
        if (empty($datos["nombre"])) {
            echo "El nombre es obligatorio... <br>";
            $booleano= false;
        }

        // Validacion del Email
        if (empty($datos["email"]) || (!filter_var($datos["email"], FILTER_VALIDATE_EMAIL))) {
            echo "El email es obligatorio o el formato no es valido... <br>";
            $booleano= false;
        }

        // Validacion del Telefono
        if (empty($datos["telefono"])) {
            echo "El numero de telefono es obligatorio... <br>";
            $booleano= false;
        }

        // Validacion de la Edad
        if ((!filter_var($datos["edad"], FILTER_VALIDATE_INT)) || ($datos["edad"]<1 || $datos["edad"]>131)) {
            echo "El formato de la edad no es valido... <br>";
            $booleano= false;
        }

        // Validacion de la talla del calzado
        if (($datos["talla_calzado"]>45 || $datos["talla_calzado"]<20) || (!filter_var($datos["talla_calzado"], FILTER_VALIDATE_INT))) {
            echo "El formato de la talla del calzado no es valido... <br>";
            $booleano= false;
        }

        // Validacion de la altura
        if ($datos["altura"]>2.00 || $datos["altura"]<0.00) {
            echo "El formato de la altura no es valido... <br>";
            $booleano= false;
        }

        // Validacion del color de pelo
        if ($datos["color_pelo"] != "negro" && $datos["color_pelo"] != "rubio" && $datos["color_pelo"] != "castanio" && $datos["color_pelo"] != "pelirrojo") {
            echo "El color de pelo ingresado no se corresponde con los colores validos... <br>";
            $booleano= false;
        }

        // Validacion de la fecha del turno
        if (empty($datos["fecha_turno"])) {
            echo "La fecha_turno es obligatorio... <br>";
            $booleano= false;
        }

        // Validacion del horario del turno
        if (empty($datos["horario_turno"])) {
            echo "El horario del turno es obligatorio... <br>";
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