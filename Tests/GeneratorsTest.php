<?php

/**
 * Description of GeneratorsTest
 *
 * @author sinevar
 */
class GeneratorsTest extends PHPUnit_Framework_TestCase 
{    
    private function &generateThreeToOne()
    {
        $value = 3;
        
        while ($value > 0) {
            yield $value;
        }
    }
    
    private function generateOneToThree()
    {
        for ($i = 1; $i <= 3; $i++) {
            yield $i => $i * 3;
        }
    }
    
    private function generateRange($start, $limit, $step = 1)
    {
        if ($start < $limit) {
            if ($step <= 0) {
                throw new LogicException('Step must be +ve');
            }
            for ($i = $start; $i <= $limit; $i += $step) {
                yield $i;
            }
        } else {
            if ($step >= 0) {
                throw new LogicException('Step must be -ve');
            }
            for ($i = $start; $i >= $limit; $i += $step) {
                yield $i;
            }
        }
    }

    public function testGeneratorsReference()
    {
        $values = 0;
        foreach ($this->generateThreeToOne() as &$value) {
            $values += ($value--);
        }
        $this->assertEquals(6, $values);
    }

    public function testGeneratorsKeyValue()
    {
        $values = ['key' => 0, 'value' => 0];
        foreach($this->generateOneToThree() as $key => $value) 
        {
            $values['key'] += $key;
            $values['value'] += $value;
        }
        
        $this->assertEquals(6, $values['key']);
        $this->assertEquals(18, $values['value']);
    }
    
    public function testGeneratorsRange()
    {
        $string = '';
        foreach ($this->generateRange(1, 9, 2) as $number) {
            $string .= $number;
        }
        $this->assertEquals('13579', $string);
        
        $string = '';
        foreach ($this->generateRange(9, 1, -2) as $number) {
            $string .= $number;
        }
        $this->assertEquals('97531', $string);
    }
}

?>
