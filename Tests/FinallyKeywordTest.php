<?php

/**
 * @author Adam Gegotek <adam.gegotek@gmail.com>
 */
class PasswordHashTest extends PHPUnit_Framework_TestCase 
{
    public function testExceptions() 
    {
        try {
            $string = 'InsideTry';
            throw new Exception('InsideException');
        } catch(Exception $e) {
            $string .= $e->getMessage();
        } finally {
            $string .= 'InsideFinally';
        }
        $string .= 'OutsideTryCatch';
        $this->assertEquals('InsideTryInsideExceptionInsideFinallyOutsideTryCatch', $string);
        
        try {
            $string2 = 'InsideTry';
        } catch(Exception $e) {
            $string2 .= $e->getMessage();
        } finally {
            $string2 .= 'InsideFinally';
        }
        $string2 .= 'OutsideTryCatch';
        $this->assertEquals('InsideTryInsideFinallyOutsideTryCatch', $string2);
    } 
        
}


?>
