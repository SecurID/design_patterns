<?php
// Include all classes (Assuming they are in the same directory)
require_once 'Beverage.php';
require_once 'Espresso.php';
require_once 'HouseBlend.php';
require_once 'AddOnDecorator.php';
require_once 'Milk.php';
require_once 'Sugar.php';
require_once 'Mocha.php';

function printBeverageDetails(Beverage $beverage) {
    echo $beverage->getDescription() . " $" . number_format($beverage->cost(), 2) . "\n";
}

// Create beverages
$espresso = new Espresso();
$houseBlend = new HouseBlend();

// Add add-ons to espresso
$espressoWithMilk = new Milk($espresso);
$espressoWithMilkAndSugar = new Sugar($espressoWithMilk);
$espressoWithMilkAndSugarAndMocha = new Mocha($espressoWithMilkAndSugar);

// Add add-ons to house blend
$houseBlendWithMocha = new Mocha($houseBlend);
$houseBlendWithMochaAndMilk = new Milk($houseBlendWithMocha);

// Print details
printBeverageDetails($espresso);
printBeverageDetails($espressoWithMilk);
printBeverageDetails($espressoWithMilkAndSugar);
printBeverageDetails($espressoWithMilkAndSugarAndMocha);
printBeverageDetails($houseBlend);
printBeverageDetails($houseBlendWithMocha);
printBeverageDetails($houseBlendWithMochaAndMilk);
