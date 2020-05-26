<?php

namespace App\core;
use App\Models\ListaTurno;

class Controller
{
    public $message = [];

    public function add_message($message)
    {
        $this->message[] = $message;
    }
}
