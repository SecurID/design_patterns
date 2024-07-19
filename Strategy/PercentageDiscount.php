<?php

class PercentageDiscount implements DiscountStrategy {

    private $percentage;

    public function __construct($percentage) {
        $this->percentage = $percentage;
    }

    public function applyDiscount($total) {
        return $total * (1 - $this->percentage / 100);
    }
}