<?php

namespace App\core;
use App\Models\ListaTurno;

class Controller
{
    public $view_data = [];
    public $messages = [];

    public function add_message($message)
    {
        $this->message[] = $message;
    }
}
