<?php

class Fruit{
    public $name;
    public $color;

}

$fruitobj = new Fruit;



$fruitobj ->name = "Mango";
$fruitobj ->color = "Red";

// var_dump($fruitobj);
$fruitobj2 = new Fruit;
$fruitobj2 ->name = "Apple";
$fruitobj2 ->color = "yallow";

var_dump($fruitobj2);
?>