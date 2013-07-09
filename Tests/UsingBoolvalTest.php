<?php

/**
 * @author Adam Gegotek <adam.gegotek@gmail.com>
 */
class UsingBoolvalTest extends PHPUnit_Framework_TestCase 
{
    public function testBoolval() 
    {
        $this->assertFalse(boolval(0));
        $this->assertTrue(boolval(42));
        $this->assertFalse(boolval(0.0));
        $this->assertTrue(boolval(0.1));
        $this->assertFalse(boolval(''));
        $this->assertTrue(boolval('string'));
        $this->assertTrue(boolval([1,2]));
        $this->assertFalse(boolval([]));
        $this->assertFalse(boolval(array()));
        $this->assertTrue(boolval(new stdClass));
    } 
}

