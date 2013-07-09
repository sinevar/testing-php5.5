<?php

/**
 * @author Adam Gegotek <adam.gegotek@gmail.com>
 */
class UsingListInForeachTest extends PHPUnit_Framework_TestCase 
{
    public function testListStatement() 
    {
       $records = [
           [2, 'Adam', 'Gegotek'],
           [5, 'Marcin', 'Niewiadomek'],
           [9, 'Ola', 'Olewska']
       ];
       
       $ids = $firstNames = $lastNames = '';
       foreach ($records as list($id, $firstName, $lastName)) {
           $ids .= $id;
           $firstNames .= $firstName;
           $lastNames .= $lastName;
       }
       
       $this->assertEquals('259', $ids);
       $this->assertEquals('AdamMarcinOla', $firstNames);
       $this->assertEquals('GegotekNiewiadomekOlewska', $lastNames);
       
       // all strings must be of the same length
       $strings = [
         'ela',
         'ola',
         'zoo'
       ];
             
       $results = [];
       foreach ($strings as list($a, $b, $c)) {
           $results['a'][] = $a;
           $results['b'][] = $b;
           $results['c'][] = $c;
       }
       
       $this->assertEquals(['e', 'o', 'z'], $results['a']);
       $this->assertEquals(['l', 'l', 'o'], $results['b']);
       $this->assertEquals(['a', 'a', 'o'], $results['c']);
      
       $results = [];
       foreach ($strings as list($a, $b)) {
           $results['a'][] = $a;
           $results['b'][] = $b;
       }
       
       $this->assertEquals(['e', 'o', 'z'], $results['a']);
       $this->assertEquals(['l', 'l', 'o'], $results['b']);
    }
}


?>
