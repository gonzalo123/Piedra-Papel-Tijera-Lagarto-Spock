<?php
class Spock extends Elemento implements Refutable, Envenenable
{
    public function vaporizar(Elemento $elemento)
    {
        return $elemento instanceof Vaporizable;
    }

    public function destrozar(Elemento $elemento)
    {
        return $elemento instanceof Destrozable;
    }
}