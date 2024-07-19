<?php
class ConcreteStockPriceProvider implements StockPriceProvider {

    private $observers = [];
    private $stockPrices = [];

    public function registerObserver(StockObserver $observer)
    {
        $this->observers[] = $observer;
    }

    public function removeObserver(StockObserver $observer)
    {
        $key = array_search($observer, $this->observers, true);
        if ($key !== false) {
            unset($this->observers[$key]);
        }
    }

    public function notifyObservers()
    {
        foreach($this->observers as $observer) {
            $observer->update($this->stockPrices);
        }
    }

    public function setStockPrice($stock, $price)
    {
        $this->stockPrices[$stock] = $price;
        $this->notifyObservers();
    }
}