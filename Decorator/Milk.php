<?php
class Milk extends AddOnDecorator {
    public function getDescription() {
        return $this->beverage->getDescription() . ", Milk";
    }

    public function cost() {
        return $this->beverage->cost() + 0.10;
    }
}