<?php
class Lagarto extends Elemento implements Aplastable, Decapitable
{
    public function comer(Elemento $elemento)
    {
        return $elemento instanceof Comible;
    }

    public function envenenar(Elemento $elemento)
    {
        return $elemento instanceof Envenenable;
    }
}