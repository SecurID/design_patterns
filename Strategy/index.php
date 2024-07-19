<?php

require_once 'Product.php';
require_once 'Cart.php';
require_once 'DiscountStrategy.php';
require_once 'NoDiscount.php';
require_once 'PercentageDiscount.php';
require_once 'FixedAmountDiscount.php';

$product1 = new Product('Product 1', 10);
$product2 = new Product('Product 2', 20);
$product3 = new Product('Product 3', 30);

$cart = new Cart();

$cart->addProduct($product1);
$cart->addProduct($product2);
$cart->addProduct($product3);

$cart->setDiscountStrategy(new NoDiscount());
echo "Total price without discount: " . $cart . "<br>";

$cart->setDiscountStrategy(new PercentageDiscount(10));
echo "Total price with 10% discount: " . $cart . "<br>";

$cart->setDiscountStrategy(new FixedAmountDiscount(50));
echo "Total price with fixed amount discount: " . $cart . "<br>";


