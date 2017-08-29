<?php

use Main\ShopProduct;
use Extra\ShopProduct as ExtraShopProduct;
use Traits\ExtraFunctionallity as Traits;

class Shipping implements Charchable
{
    use Traits;

    private $product;
    private $delivery;

    public function __construct(ShopProduct $product, $delivery = 0)
    {
        $this->product = $product;
        $this->delivery = $delivery;
    }

    public function getPrice()
    {
        return $this->product->getPrice() + $this->delivery;
    }
}
