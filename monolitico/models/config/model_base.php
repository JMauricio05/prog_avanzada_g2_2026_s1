<?php

namespace app\models\config;

abstract class ModelBase
{
    public function get($prop)
    {
        return $this->{$prop};
    }

    public function set($prop, $value)
    {
        $this->{$prop} = $value;
    }
}
