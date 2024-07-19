<?php
class Sugar extends AddOnDecorator {
    public function getDescription() {
        return $this->beverage->getDescription() . ", Sugar";
    }

    public function cost() {
        return $this->beverage->cost() + 0.05;
    }
}