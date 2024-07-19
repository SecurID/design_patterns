<?php
interface StockObserver {
    public function update(array $stockPrices);
}