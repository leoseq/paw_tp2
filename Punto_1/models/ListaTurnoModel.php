<?php

namespace App\models;

class ListaTurno 
{
    public $turnos = [];

    public function add_turno($turno) 
    {
        $this->turnos[] = $turno;
    }

    public function cantidad_turnos() 
    {
        return count($this->turnos);
    }

    public function crear_turno($datos) 
    {
        $turno = new Turno($datos);
        $this->add_turno($turno);
        return $turno;
    }

    public function validar()
    {
        
    }
}
