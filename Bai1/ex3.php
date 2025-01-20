<?php 

class Animal {
    public $name;
    public $color;

    public function __construct($name ,$color)
    {
        $this ->name = $name;
        $this ->color = $color;
    }

    public function sound()
    {
        echo $this -> name . "dang keu ...<br>";
    }
}
class Dog extends Animal {
    public function sound()
    {
        echo $this->name ." dang keu gogo ...<br>";
    }
}

$animal = new Animal("Ho van ","Van den" );
$dog = new Dog("Cau vang" , "Vang");

$animal ->sound();
$dog ->sound();
