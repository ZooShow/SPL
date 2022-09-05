<?php

class ObjectAsArray extends ArrayObject {
}

$data = [
    'a' => 1,
    'b' => 2,
    'c' => 3,
    'd' => 4,
    'e' => 5,
];

$a = new ObjectAsArray($data);

$a[0] = 'asd';
unset($a['a']);
$a[] = 'hello';

var_dump($a);