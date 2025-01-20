<?php

class Animal {
    private $name;
    protected $color;
    public $age;

    public function setName(string $name){
      $this->name = $name;
    }
    public function getName() 
    {
        return $this->name;
    }
}
class Dog extends Animal{
    public function info(){
        echo " Name:" . $this->getName();
        echo "<br>Color:" . $this->color;
        echo "<br>Age:" . $this->age;
    }
    public function setColor($color)
    {
        $this->color =$color;
    }
}
 
 
$dog = new Dog;

$animal = new Animal;
// echo "<pre>";
// var_dump($dog);
// var_dump($animal);

$dog->setName("Cau Vang");
$dog->setColor("Vang") ;
$dog->age = 5;
$dog->info();

