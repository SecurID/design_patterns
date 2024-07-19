<?php
class ConcreteStockObserver implements StockObserver {
    private $name;

    public function __construct($name) {
        $this->name = $name;
    }

    public function update(array $stockPrices) {
        echo "ConcreteStockObserver {$this->name} received stock prices update:" . json_encode($stockPrices) . "\n";
    }
}