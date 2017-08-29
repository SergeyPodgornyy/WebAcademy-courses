<?php

class Human
{
    public $fingerCount = 20;
    private $name = 'World';

    private function sayHello()
    {
        return "Hello " . $this->name;
    }

    public function info()
    {
        echo $this->sayHello(), ' you have ', $this->fingerCount, ' fingers';
    }

    public function setName($value)
    {
        $this->name = $value;
    }

    public function __set($propety, $value)
    {
        $methodName = "set" . ucfirst($propety);
        if (method_exists($this, $methodName)) {
            $this->$methodName($value);
        }
    }
}

$male = new Human();
$male->setName('George');
$male->name = 'David';
$male->info();

echo '<br>';

$female = new Human();
$female->info();

echo '<br>';
$male->info();

