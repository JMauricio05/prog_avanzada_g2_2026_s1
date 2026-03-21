<?php

namespace app\models\entities;

use app\models\config\ModelBase;

class Estudiante extends ModelBase
{
    protected $id = 0;
    protected $nombre = null;
    protected $email = null;

    public function __construct($id, $nombre, $email)
    {
        $this->id = $id;
        $this->nombre = $nombre;
        $this->email = $email;
    }

   
}
