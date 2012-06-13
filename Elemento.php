<?php
abstract class Elemento
{
    public function fight(Elemento $elemento)
    {
        if ($this instanceof $elemento) return null;
        foreach (get_class_methods($this) as $action) {
            if ($this->$action($elemento)) {
                return true;
            }
        }
	return false;
    }
}
