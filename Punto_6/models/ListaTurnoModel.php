<?php

namespace App\models;

class ListaTurno 
{
    public $turnos = [];

    public function add_turno(Turno $turno) 
    {
        array_push($this->turnos, $turno);
    }

    public function crear_turno($datos) 
    {
        $turno = new Turno($datos);
        $this->add_turno($turno);
        return $turno;
    }

    public function getTurnos()
    {
        return $this->turnos;
    }

}
