<?php

/**
 * @author Adam Gegotek <adam.gegotek@gmail.com>
 */
class FinallyKeywordTest extends PHPUnit_Framework_TestCase 
{
    public function testPasswordHash() 
    {
        $this->assertEquals(60, strlen(password_hash('xtreemcoder.com', PASSWORD_BCRYPT)));
        $this->assertEquals(60, strlen(password_hash('xtreemcoder.com', PASSWORD_BCRYPT, array('salt' => '1234567890123456789012', 'cost' => 10))));
        // you should never use not randomly generated salt. It's just for fun :)
        $this->assertEquals('$2y$10$123456789012345678901uKTgaCscewicF6GYUnyjleQLsSPSwMFy', password_hash('xtreemcoder.com', PASSWORD_BCRYPT, array('salt' => '1234567890123456789012', 'cost' => 10)));
        
        $passwordGetInfo = password_get_info('$2y$10$123456789012345678901uKTgaCscewicF6GYUnyjleQLsSPSwMFy');
        $this->assertCount(3, $passwordGetInfo);
        
        $this->assertArrayHasKey('algo', $passwordGetInfo);
        $this->assertArrayHasKey('algoName', $passwordGetInfo);
        $this->assertArrayHasKey('options', $passwordGetInfo);
        $this->assertEquals(array(
            'algo' => PASSWORD_BCRYPT, 
            'algoName' => 'bcrypt', 
            'options' => array('cost' => 10)
        ), $passwordGetInfo);
        
        $this->assertTrue(password_verify('xtreemcoder.com', '$2y$10$123456789012345678901uKTgaCscewicF6GYUnyjleQLsSPSwMFy'));
    } 
}


?>
