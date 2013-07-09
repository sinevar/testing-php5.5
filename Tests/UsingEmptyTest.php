<?php

/**
 * @author Adam Gegotek <adam.gegotek@gmail.com>
 */
class UsingEmptyTest extends PHPUnit_Framework_TestCase 
{
    private function alwaysFalse()
    {
        return false;
    }
    
    public function testEmptyFunction() 
    {
        $closure = function() {
            return false;
        };
        
        // simple tests that will work with php < 5.5
        $this->assertTrue(empty(''));
        $this->assertTrue(empty(0));
        
        // new feature that will work only with php >= 5.5
        $this->assertTrue(empty($this->alwaysFalse()));
        $this->assertTrue(empty(trim('')));
        
        // variable is not empty
        $this->assertFalse(empty($closure));
        // while the closure returns always false, so empty function threats it as empty 
        $this->assertTrue(empty($closure()));
        
    } 
}


?>
