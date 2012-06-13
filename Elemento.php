<?php
abstract class Elemento
{
    public function fight(Elemento $Elemento)
    {
        if ($this instanceof $Elemento ) return null;
        foreach (get_class_methods($this) as $action) {
            if ($this->$action($Elemento)) {
                return true;
            }
        }
    }
}
