<?php

class Accessible implements ArrayAccess {
    private array $data = [
        'a' => 1,
        'b' => 2,
        'c' => 3,
        'd' => 4,
        'e' => 5,
    ];

    public function offsetExists($offset)
    {
        return isset($this->data[$offset]);
    }

    public function offsetGet($offset)
    {
        return $this->data[$offset] ?? null;
    }

    public function offsetSet($offset, $value)
    {
        $this->data[$offset] = $value;
    }

    public function offsetUnset($offset)
    {
        unset($this->data[$offset]);
    }
}

$a = new Accessible();

$a['a'] = 'a';
$a['asd'] = 2;
unset($a['a'], $a[0]);

var_dump($a);
