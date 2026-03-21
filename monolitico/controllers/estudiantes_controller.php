<?php

namespace app\controllers;

use app\models\queries\EstudiantesQuery;
use app\models\entities\Estudiante;

class EstudiantesController
{

    public function getListaEstudiantes()
    {
        $lista_estudiantes = EstudiantesQuery::getAllEstudiantes();
        return $lista_estudiantes;
    }

    public function registrarEstudiante($datos){
        $estudiante = new Estudiante(0, $datos['nombre'], $datos['email']);
        $estado = EstudiantesQuery::createEstudiante($estudiante);
        return $estado;
    }
}
