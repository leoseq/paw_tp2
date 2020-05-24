<?php

namespace App\controllers;

use App\core\Controller;
use App\models\ListaTurno;

class ListaTurnoController extends Controller
{
    public function index()
    {
        include "views/index.view.php";
    }
}
