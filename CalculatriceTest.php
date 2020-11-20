<?php


use PHPUnit\Framework\TestCase;

include "./Calculatrice.php";

class CalculatriceTest extends TestCase
{
    public function testAdd()
    {
        $calc = new Calculatrice();
        return $this->assertEquals(10, $calc->add(4,6), 'Addition KO');
    }
}