<?php

class Cart {
    private $products = [];
    private $discountStrategy;

    public function addProduct(Product $product) {
        $this->products[] = $product;
    }

    public function setDiscountStrategy(DiscountStrategy $strategy) {
        $this->discountStrategy = $strategy;
    }

    public function calculateTotal() {
        $total = 0;
        foreach ($this->products as $product) {
            $total += $product->getPrice();
        }
        if ($this->discountStrategy) {
            $total = $this->discountStrategy->applyDiscount($total);
        }
        return $total;
    }

    public function __toString() {
        return  $this->calculateTotal();
    }
}