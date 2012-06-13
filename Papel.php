<?php
class Papel extends Elemento implements Cortable, Comible
{
    public function cubrir(Elemento $Elemento)
    {
        return $Elemento instanceof Cubrible;
    }

    public function refutar(Elemento $Elemento)
    {
        return $Elemento instanceof Refutable;
    }
}