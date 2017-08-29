<?php

class MyClass
{
    public      $public     = 'Public';
    protected   $protected  = 'Protected';
    private     $private    = 'Private';

    public function printHello()
    {
        echo $this->public . PHP_EOL;
        echo $this->protected . PHP_EOL;
        echo $this->private . PHP_EOL;
    }
}

$obj = new MyClass;

echo $obj->public;          // It works
echo $obj->protected;       // PHP Fatal error:  Uncaught Error: Cannot access protected property
echo $obj->private;         // PHP Fatal error:  Uncaught Error: Cannot access private property

$obj->printHello();         // Output: Public, Protected, Private
