<?php

interface StockPriceProvider {
    public function registerObserver(StockObserver $observer);
    public function removeObserver(StockObserver $observer);
    public function notifyObservers();
}