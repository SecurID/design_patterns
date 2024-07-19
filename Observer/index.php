<?php
require_once 'StockObserver.php';
require_once 'StockPriceProvider.php';
require_once 'ConcreteStockObserver.php';
require_once 'ConcreteStockPriceProvider.php';

$stockProvider = new ConcreteStockPriceProvider();

$observer1 = new ConcreteStockObserver('Observer 1');
$observer2 = new ConcreteStockObserver('Observer 2');

$stockProvider->registerObserver($observer1);
$stockProvider->registerObserver($observer2);

$stockProvider->setStockPrice('AAPL', 100);
$stockProvider->setStockPrice('GOOG', 200);

$stockProvider->removeObserver($observer2);

$stockProvider->setStockPrice('AAPL', 150);
