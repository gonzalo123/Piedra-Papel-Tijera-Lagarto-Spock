<?php
class Spock extends Elemento implements Refutable, Envenenable
{
    public function vaporizar(Elemento $Elemento)
    {
        return $Elemento instanceof Vaporizable;
    }

    public function destrozar(Elemento $Elemento)
    {
        return $Elemento instanceof Destrozable;
    }
}