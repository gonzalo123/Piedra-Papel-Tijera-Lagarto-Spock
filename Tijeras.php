<?php
class Tijeras extends Elemento implements Destrozable, Aplastable
{
    public function cortar(Elemento $elemento)
    {
        return $elemento instanceof Cortable;
    }

    public function decapitar(Elemento $elemento)
    {
        return $elemento instanceof Decapitable;
    }
}