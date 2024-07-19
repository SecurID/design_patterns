<?php

class HouseBlend implements Beverage {
    public function getDescription() {
        return "House Blend Coffee";
    }

    public function cost() {
        return 0.89;
    }
}