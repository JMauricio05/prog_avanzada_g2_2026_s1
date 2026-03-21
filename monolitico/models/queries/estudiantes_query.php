<?php

namespace app\models\queries;

use app\models\config\ConnectionDB;
use app\models\entities\Estudiante;

class EstudiantesQuery
{

    static function getAllEstudiantes()
    {
        $sql = "select * from estudiantes";
        $connDb = new ConnectionDB();
        $result = $connDb->execute($sql);
        $list = [];
        while ($row = $result->fetch_assoc()) {
            $estudiante = new Estudiante($row['id'], $row['nombre'], $row['email']);
            array_push($list, $estudiante);
        }
        return $list;
    }
}
