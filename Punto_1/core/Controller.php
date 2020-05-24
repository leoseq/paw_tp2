<?php

namespace App\core;

class Controller
{
    public $view_data = [];
    public $messages = [];

    public function add_data($data)
    {
        $this->view_data = array_merge($this->view_data, $data);
    }

    public function add_message($message)
    {
        $this->message[] = $message;
    }
}
