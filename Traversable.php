<?php

class ArrayTraversable implements IteratorAggregate {

    public int $a = 1;
    public int $b = 2;
    public int $c = 3;
    public int $d = 4;
    private int $e = 5;
    protected int $f = 6;

    public function getIterator()
    {
        return new ArrayIterator($this);
    }
}

$array = new ArrayTraversable();

// private и protected поля не выводит
foreach ($array as $index => $item) {
    echo $index . ' => ' . $item . PHP_EOL;
}