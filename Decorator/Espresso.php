<?php

class Espresso implements Beverage {
    public function getDescription() {
        return "Espresso";
    }

    public function cost() {
        return 1.99;
    }
}