<?php

abstract class AddOnDecorator implements Beverage {
    protected $beverage;

    public function __construct(Beverage $beverage) {
        $this->beverage = $beverage;
    }

    abstract public function getDescription();

    abstract public function cost();
}