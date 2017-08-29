<?php

namespace Main;

class ShopProduct implements \Charchable
{
    protected $title;
    protected $authorLastName;
    protected $authorFirstName;
    protected $price;
    private $discount = 0;

    public function __construct($title, $fName, $lName, $price = 0)
    {
        $this->title = $title;
        $this->authorFirstName = $fName;
        $this->authorLastName = $lName;
        $this->price = $price;
    }

    final public function setDiscount($value)
    {
        $this->discount = $value;
    }

    public function getPrice()
    {
        return $this->price - $this->price * $this->discount / 100;
    }

    public function getAuthorFullName()
    {
        return $this->authorFirstName . " " . $this->authorLastName;
    }

    public function getSummeryLine()
    {
        return $this->title
            . ' (' . $this->getAuthorFullName() . ') '
            . ' - $' . $this->getPrice();
    }

    public function __get($property)
    {
        return $this->$property;
    }

    public function __set($propety, $value)
    {
        $this->$propety = $value;
    }

    // public static $name = 'World';

    // public static function sayHello()
    // {
    //     echo "Hello " . self::$name;
    // }

    // const AVAILABLE = 1;
    // const OUT_OF_ORDER = 0;
}
