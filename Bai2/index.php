<?php

require_once __DIR__ ."/vendor/autoload.php";

// require_once "Animal.php";
// require_once "Dog.php";
// require_once "./ClassA.php";
// require_once "./ClassB.php";
// require_once "./ClassC.php";

use App\classC;
use App\Dog;
use App\Animal;
$dog = new Dog('cauvang','Mau vang');
$dog->info();

echo "<br> Type " . Dog::TYPE;

Animal::soundA();
Dog::soundA();

Animal::soundB();
Animal::soundB();

$classA = new classC;
$classA->method1();
$classA->method2();
