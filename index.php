<?php

echo 'Ala'[0];

$array = [1, 2, 3, 4, 5];

$dArray = [
    'fdsfds',
    [1,2,3],
    [4,5,6]
];

echo [1,2,3][0] . "<br />";


foreach ($dArray as list($a, $b, $c)) {
    print $a . "--" . $b . "--" . $c . "<br />";    
}

