<?php

namespace app\controllers;

use app\models\queries\EstudiantesQuery;

class EstudiantesController
{

    public function getListaEstudiantes()
    {
        $lista_estudiantes = EstudiantesQuery::getAllEstudiantes();
        return $lista_estudiantes;
    }
}
