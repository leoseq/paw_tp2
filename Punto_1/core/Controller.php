<?php

namespace App\core;
use App\Models\ListaTurno;

class Controller
{
    public $view_data = [];
    public $messages = [];

    public function __construct()
    {

    //    global $lista_turnos;
    //    $lista_turnos = new ListaTurno;
    }

    public function add_data($data)
    {
        $this->view_data = array_merge($this->view_data, $data);
    }

    public function add_message($message)
    {
        $this->message[] = $message;
    }
}
