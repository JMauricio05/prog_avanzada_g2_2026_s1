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

    public function registrarEstudiante($datos)
    {
        $estudiante = new Estudiante(0, $datos['nombre'], $datos['email']);
        $estado = EstudiantesQuery::createEstudiante($estudiante);
        return $estado;
    }

    public function getEstudiante($id)
    {
        if(empty($id)){
            //echo "Error id no existe";
            return null;
        }
        $datos = EstudiantesQuery::findEstudiante($id);
        return $datos;
    }

    public function modificarEstudiante($datos){
        $estudiante = new Estudiante($datos["id"], $datos['nombre'], $datos['email']);
        $estado = EstudiantesQuery::updateEstudiante($estudiante);
        return $estado;
    }

    public function borrarEstudiante($id){
        $estado = EstudiantesQuery::deleteEstudiante($id);
        return $estado;
    }
}
