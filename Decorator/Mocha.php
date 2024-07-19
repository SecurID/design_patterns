<?php
class Mocha extends AddOnDecorator {
    public function getDescription() {
        return $this->beverage->getDescription() . ", Mocha";
    }

    public function cost() {
        return $this->beverage->cost() + 0.20;
    }
}