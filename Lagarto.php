<?php
class Lagarto extends Elemento implements Aplastable, Decapitable
{
    public function comer(Elemento $Elemento)
    {
        return $Elemento instanceof Comible;
    }

    public function envenenar(Elemento $Elemento)
    {
        return $Elemento instanceof Envenenable;
    }
}