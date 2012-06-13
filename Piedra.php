<?php
class Piedra extends Elemento implements Cubrible, Vaporizable
{
    public function aplastar(Elemento $Elemento)
    {
        return $Elemento instanceof Aplastable;
    }
}
