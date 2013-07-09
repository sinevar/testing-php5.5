<?php

/**
 * @author Adam Gegotek <adam.gegotek@gmail.com>
 */
class UsingArrayColumnTest extends PHPUnit_Framework_TestCase 
{
    public function testArrayColumn() 
    {
       $records = [
           [
               'id' => 2,
               'first_name' => 'Adam',
               'last_name' => 'Gegotek'
           ],
           [
               'id' => 5,
               'first_name' => 'Marcin',
               'last_name' => 'Niewiadomek'
           ],
           [
               'id' => 9,
               'first_name' => 'Ola',
               'last_name' => 'Olewska'
           ]
       ];
       
       $this->assertEquals([2, 5, 9], array_column($records, 'id'));
       $this->assertEquals(['Adam', 'Marcin', 'Ola'], array_column($records, 'first_name'));
       $this->assertEquals([2 => 'Gegotek', 5 => 'Niewiadomek', 9 => 'Olewska'], array_column($records, 'last_name', 'id'));
    } 
}


?>
