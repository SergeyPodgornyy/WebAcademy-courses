<?php

use Main\ShopProduct;

class BookProduct extends ShopProduct
{
    private $numPages;

    public function __construct($title, $fName, $lName, $price = 0, $numPages = 0)
    {
        parent::__construct($title, $fName, $lName, $price);

        $this->numPages = $numPages;
    }

    public function getSummeryLine()
    {
        $base = parent::getSummeryLine();

        return $base . ' and has ' . $this->numPages . ' pages';
    }

    public function getNumPages()
    {
        return $this->numPages;
    }
}
