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
        include "views/index.view.php";
    }
}
