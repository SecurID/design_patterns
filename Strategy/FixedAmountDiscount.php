<?php

class FixedAmountDiscount implements DiscountStrategy {

    private $amount;

    public function __construct($amount) {
        $this->amount = $amount;
    }

    public function applyDiscount($total) {
        return $total - $this->amount;
    }
}