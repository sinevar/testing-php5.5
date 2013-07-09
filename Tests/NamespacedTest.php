<?php

use sinevar\place as tmp;
/**
 * Description of NamespacedTest
 *
 * @author sinevar
 */
class NamespacedTest extends PHPUnit_Framework_TestCase{
    //put your code here
    public function testClassNameResolution()
    {
        $namespaced = new tmp\Namespaced();
        $this->assertEquals('sinevar\place\Namespaced', tmp\Namespaced::class);
        $this->assertEquals('Namespaced', \Namespaced::class);
        
        $this->assertEquals('Namespaced Class', $namespaced);

    }
}

