<?php

use Main\ShopProduct;

class ShopProductWriter
{
    private $products = [];

    public function write()
    {
        foreach ($this->products as $product) {
            if ($product instanceof BookProduct || $product instanceof CDProduct) {
                echo $product->title
                    . ' (' . $product->getAuthorFullName() . ') '
                    . ' - $' . $product->getPrice()
                    . '<br>';
            }
        }
    }

    public function addProducts(ShopProduct $product)
    {
        $this->products[] = $product;
    }
}

