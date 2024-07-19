<?php

class NoDiscount implements DiscountStrategy {
    public function applyDiscount($total) {
        return $total;
    }
}