<?php 

 abstract class Car {
    protected $name;
    protected $color;

    public function __construct($name , $color)
    {
        $this ->name =$name;
        $this ->color =$color;
    }
    abstract function sound();

    public function info(){
        echo "Name :" .$this ->name;
        echo"<br>Color:" .$this->color;
        echo "<br>";
    }
}

class VinFat extends Car{
    public function sound()
    {
        echo $this->name . "Bum Bum ...<br>";
    }
}

class Toyota extends Car {
    public function sound()
    {
        echo $this->name . "Buzzz Buzzz....<br>";
    }
}
$vinfat = new VinFat("VF5" ,"Den");
$toyota = new Toyota("Vios" ,"Trang");

$vinfat->info();
$vinfat->sound();

$toyota->info();
$toyota->sound();


