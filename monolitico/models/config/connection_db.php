<?php

namespace app\models\config;

use mysqli;

class ConnectionDB
{
    private $host_db = "localhost";
    private $user_db = "root";
    private $pwd_db = "";
    private $name_db = "prueba_db";
    private $connDb = null;

    public function __construct()
    {
        $this->connDb = new mysqli(
            $this->host_db,
            $this->user_db,
            $this->pwd_db,
            $this->name_db
        );
        if ($this->connDb->connect_error) {
            die($this->connDb->connect_error);
        }
    }

    public function execute($sql)
    {
        $stm = $this->connDb->prepare($sql);
        $stm->execute();
        return $stm->get_result();
    }

    public function close()
    {
        $this->connDb->close();
    }
}
