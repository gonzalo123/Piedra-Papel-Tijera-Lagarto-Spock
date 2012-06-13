<?php
class Papel extends Elemento implements Cortable, Comible
{
    public function cubrir(Elemento $elemento)
    {
        return $elemento instanceof Cubrible;
    }

    public function refutar(Elemento $elemento)
    {
        return $elemento instanceof Refutable;
    }
}