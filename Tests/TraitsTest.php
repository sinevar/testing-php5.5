<?php

class TraitsTest extends PHPUnit_Framework_TestCase
{
    public function testTraits()
    {
        $this->assertEquals('red',(new Vehicle)->getColor());
        $this->assertEquals('green', (new Vehicle)->shipGetColor());
        
        $this->assertEquals('VehicleToString', new Vehicle());
        $this->assertContains('Car', get_declared_traits());
        $this->assertContains('Ship', get_declared_traits());

        $this->assertContains('Car', class_uses(new Vehicle));
        $this->assertContains('Ship', class_uses(new Vehicle));
    }
}
