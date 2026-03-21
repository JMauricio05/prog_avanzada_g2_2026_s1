<?php

namespace app\models\entities;

class Estudiante
{
    private $id = 0;
    private $nombre = null;
    private $email = null;

    public function __construct($id, $nombre, $email)
    {
        $this->id = $id;
        $this->nombre = $nombre;
        $this->email = $email;
    }

    public function get($prop)
    {
        return $this->{$prop};
    }

    public function set($prop, $value)
    {
        $this->{$prop} = $value;
    }
}
