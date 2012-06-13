<?php
include('../loader.php');

class GameTest extends PHPUnit_Framework_TestCase
{
    public function testTijerasCortanPapel()
    {
        $elemento = new Tijeras();
        $this->assertTrue($elemento->fight(new Papel()));
    }

    public function testPapelCubrePiedra()
    {
        $elemento = new Papel();
        $this->assertTrue($elemento->fight(new Piedra()));
    }

    public function testPiedraAplastaLagarto()
    {
        $elemento = new Piedra();
        $this->assertTrue($elemento->fight(new Lagarto()));
    }

    public function testLagartoEnvenenaSpock()
    {
        $elemento = new Lagarto();
        $this->assertTrue($elemento->fight(new Spock()));
    }

    public function testSpockDestrozaTijeras()
    {
        $elemento = new Spock();
        $this->assertTrue($elemento->fight(new Tijeras()));
    }

    public function testTijerasDecapitanLagarto()
    {
        $elemento = new Tijeras();
        $this->assertTrue($elemento->fight(new Lagarto()));
    }

    public function testLagartoComePapel()
    {
        $elemento = new Lagarto();
        $this->assertTrue($elemento->fight(new Papel()));
    }

    public function testPapelRefutaSpock()
    {
        $elemento = new Papel();
        $this->assertTrue($elemento->fight(new Spock()));
    }

    public function testSpockVaporizaPiedra()
    {
        $elemento = new Spock();
        $this->assertTrue($elemento->fight(new Piedra()));
    }

    public function testPiedraAplastaTijeras()
    {
        $elemento = new Piedra();
        $this->assertTrue($elemento->fight(new Tijeras()));
    }

    public function testEmpatePiedra()
    {
        $elemento = new Piedra();
        $this->assertNull($elemento->fight(new Piedra()));
    }

    public function testEmpatePapel()
    {
        $elemento = new Papel();
        $this->assertNull($elemento->fight(new Papel()));
    }

    public function testEmpateTijeras()
    {
        $elemento = new Tijeras();
        $this->assertNull($elemento->fight(new Tijeras()));
    }

    public function testEmpateLagarto()
    {
        $elemento = new Lagarto();
        $this->assertNull($elemento->fight(new Lagarto()));
    }

    public function testEmpateSpock()
    {
        $elemento = new Spock();
        $this->assertNull($elemento->fight(new Spock()));
    }
}

