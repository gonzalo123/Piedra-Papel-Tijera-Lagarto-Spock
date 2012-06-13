<?php
class Piedra extends Elemento implements Cubrible, Vaporizable
{
    public function aplastar(Elemento $elemento)
    {
        return $elemento instanceof Aplastable;
    }
}
