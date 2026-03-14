<?php
class Numero
{
    private $valor;

    public function __construct($valor)
    {
        $this->valor = $valor;
    }

    public function esPar()
    {
        return ($this->valor % 2) == 0;
    }

    public function validacion()
    {
        if ($this->esPar()) {
            return "El número " . $this->valor . " es par";
        }
        return "El número " . $this->valor . " es impar";
    }
}
