<?php
class Tijeras extends Elemento implements Destrozable, Aplastable
{
    public function cortar(Elemento $Elemento)
    {
        return $Elemento instanceof Cortable;
    }

    public function decapitar(Elemento $Elemento)
    {
        return $Elemento instanceof Decapitable;
    }
}