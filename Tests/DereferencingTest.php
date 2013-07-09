<?php

/**
 * @author Adam Gegotek <adam.gegotek@gmail.com>
 */
class DereferencingTest extends PHPUnit_Framework_TestCase {
    
    /**
     * Tests http://pl1.php.net/migration55.new-features#migration55.new-features.const-dereferencing
     */
    public function testDereferencingString() {
        $this->assertEquals('1', '123456'[0]);
        $this->assertEquals('AD', 'ADAM'[0] . 'ADAM'[1]);
    }
    
    /**
     * Tests http://pl1.php.net/migration55.new-features#migration55.new-features.const-dereferencing
     */
    public function testDereferencingArrays() {
        $this->assertEquals(10, [11,10,9][1]);
        $this->assertEquals(1, [1,2,[3,4]][0]);
        $this->assertEquals(3, [1,2,[3,4]][2][0]);
        $this->assertEquals(4, [1,2,[3,4]][2][1]);
    }
}

?>
