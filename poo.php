<?php

class Persona
{
    private $id = 0;
    private $nombre = null;
    private $edad = 0;
    private $email = "";

    function __construct($nombre)
    {
        $this->nombre = $nombre;
    }

    function mayorEdad()
    {
        if ($this->edad >= 18) {
            return "Es mayor de edad";
        } else {
            return "Es menor de edad";
        }
    }

    function setEdad($val)
    {
        $this->edad = $val;
    }

    function getEdad()
    {
        return $this->edad;
    }

    function setNombre($val)
    {
        $this->nombre = $val;
    }

    function getNombre()
    {
        return $this->nombre;
    }

    function set($attb, $val)
    {
        $this->{$attb} = $val;
    }

    function get($attb)
    {
        return $this->{$attb};
    }

}

class Estudiante extends Persona
{
    private $codigo = null;

    function __construct($codigo, $nombre)
    {
        //$this->set("nombre", $nombre);
        parent::__construct($nombre);
        $this->codigo = $codigo;
    }
}

$persona1 = new Persona("Pepe");
$persona1->setEdad(18);
$persona1->set("edad", 17);
$persona1->set("nombre", "Ana");
echo $persona1->getNombre() . " " . $persona1->mayorEdad() . "\n";

$estudiante = new Estudiante("12345", "Juan");
$estudiante->setEdad(20);
echo $estudiante->getNombre() . " " . $estudiante->mayorEdad() . "\n";

interface IFiguraGoemetrica
{
    public function area();
    //public function perimetro();
}

class Cuadrado implements IFiguraGoemetrica
{
    private $arista = null;
    public function __construct($arista)
    {
        $this->arista = $arista;
    }

    public function area()
    {
        return $this->arista * $this->arista;
    }
}

class Retangulo implements IFiguraGoemetrica
{
    private $base = null;
    private $altura = null;
    public function __construct($base, $altura)
    {
        $this->base = $base;
        $this->altura = $altura;
    }
    public function area()
    {
        return $this->base * $this->altura;
    }
}

abstract class Figura
{
    abstract public function area();

    public function set($prop, $value)
    {
        $this->{$prop} = $value;
    }
}

class Triangulo extends Figura
{
    protected $base = null;
    protected $altura = null;

    public function area()
    {
        return ($this->base * $this->altura) / 2;
    }
}

$triangulo = new Triangulo();
$triangulo->set("base", 3);
$triangulo->set("altura", "5");

echo "El area del triangulo es: " . $triangulo->area();


