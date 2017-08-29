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

class SecondClass extends MyClass
{
    // We can redefine only public and protected properties
    public      $public     = 'Public 2';
    protected   $protected  = 'Protected 2';

    public function printHello()
    {
        echo $this->public . PHP_EOL;
        echo $this->protected . PHP_EOL;
        echo $this->private . PHP_EOL;
    }
}


$obj = new SecondClass;

echo $obj->public;          // It works
echo $obj->protected;       // PHP Fatal error:  Uncaught Error: Cannot access protected property
echo $obj->private;         // PHP Notice:  Undefined property

$obj->printHello();         // Output: Public, Protected, Undefined property

