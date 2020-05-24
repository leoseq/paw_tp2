<?php

namespace App\models;

class Turno
{
    public $nombre_paciente;
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
        $this->nombre_paciente = $datos['nombre_paciente'];
        $this->email = $datos['email'];
        $this->telefono = $datos['telefono'];
        $this->edad = $datos['edad'];
        $this->talla_calzado = $datos['talla_calzado'];
        $this->altura = $datos['altura'];
        $this->fecha_nacimiento = $datos['fecha_nacimiento'];
        $this->color_pelo = $datos['color_pelo'];
        $this->fecha_turno = $datos['fecha_turno'];
        $this->hora_turno = $datos['hora_turno'];
    }

}