<?php

class Test
{
    public $property = 0;

    public function __clone()
    {
        $this->property++;
    }
}

$object = new Test();
echo $object->property;         // Output: 0

$clonedObject = clone $object;
echo $clonedObject->property;   // Output: 1
