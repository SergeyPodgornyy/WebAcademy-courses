<?php

require 'traits/ExtraTrait.php';
require 'CharchableInterface.php';
require 'Shipping.php';
require 'extra/ShopProduct.php';
require 'ShopProduct.php';
require 'BookProduct.php';
require 'CDProduct.php';
require 'ShopProductWriter.php';

// echo ShopProduct::sayHello() . '<br>';

$book = new BookProduct('The Lord of The Ring', 'J. R. R.', 'Tolkien', 30, 756);
$cd = new CDProduct('Grinding Stone', 'Robert William Gary', 'Moore', 25, 120);

echo $book->getSummeryLine() . "<br>";
$cd->setDiscount(5);
echo $cd->getSummeryLine() . "<br>";

// echo $book->getAuthorFullName();

$writer = new ShopProductWriter;

echo $writer->addProducts($book);
echo $writer->addProducts($cd);
echo '<br>';
$writer->write();
echo '<br>';
echo '<br>';

$bookShipping = new Shipping($book, 10);
echo $bookShipping->getPrice();
echo '<br>';
$bookShipping->sayBye();
