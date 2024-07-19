<?php

interface DiscountStrategy {
    public function applyDiscount($total);
}