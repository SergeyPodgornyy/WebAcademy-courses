<?php

use Main\ShopProduct;

class CDProduct extends ShopProduct
{
    private $playLength;

    public function __construct($title, $fName, $lName, $price = 0, $playLength = 0)
    {
        parent::__construct($title, $fName, $lName, $price);

        $this->playLength = $playLength;
    }

    public function getSummeryLine()
    {
        $base = parent::getSummeryLine();

        return $base . ' and durring ' . $this->playLength . ' minutes';
    }

    public function getPlayLength()
    {
        return $this->playLength;
    }
}
