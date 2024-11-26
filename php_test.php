<?php
class Fruits {
    public function __construct($marketname, $fruitname, $cost) {
        echo 'I went to ' . $marketname . ' market, and I bought ' . $fruitname . ' for ' . $cost . '<br>';
    }
}


$FruitOne = new Fruits('Arada', 'Pineapple', 5000);
$FruitTwo = new Fruits('Caretaker', 'Orange', 1000);
$FruitThree = new Fruits('Sabo', 'Mango', 300);
$FruitFour = new Fruits('Gbedu', 'Apple', 1500);
$FruitFive = new Fruits('Palace', 'Watermelon', 1000);
?>
