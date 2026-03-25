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
        $connDb->close();
        return $list;
    }

    static function createEstudiante($entity)
    {
        $sql = "insert into estudiantes (nombre, email) values (?,?)";
        $connDb = new ConnectionDB();
        $result = $connDb->executeUpdataData($sql, [
            "type" => "ss",
            "datos" => [$entity->get('nombre'), $entity->get('email')]
        ]);
        $connDb->close();
        return $result;
    }

    static function findEstudiante($id)
    {
        $sql = "select * from estudiantes where id=$id";
        $connDb = new ConnectionDB();
        $result = $connDb->execute($sql);
        $estudiante = null;
        while ($row = $result->fetch_assoc()) {
            $estudiante = new Estudiante($row['id'], $row['nombre'], $row['email']);
            break;
        }
        $connDb->close();
        return $estudiante;
    }

    static function updateEstudiante($entity){
        $sql = "UPDATE estudiantes set nombre=?, email=? where id=?";
        $connDb = new ConnectionDB();
        $result = $connDb->executeUpdataData($sql, [
            "type" => "ssi",
            "datos" => [$entity->get('nombre'), $entity->get('email'), $entity->get('id')]
        ]);
        $connDb->close();
        
        return $result;
    }
}
