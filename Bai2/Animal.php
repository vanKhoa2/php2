<?php
  
namespace app;

class Animal {
    public $name;
    public $color;

    public function __construct($name, $color)
    {
        $this->name = $name;
        $this->color = $color;
    }

    public function info() {
        echo "<br> name:" . $this->name;
        echo "<br> color:". $this->color;
    }
    //Static
    public static function soundA(){
    echo "<br> Static:" . static::class;
    }
    // self
    public static function soundB(){
    echo "<br> self: ". self::class;
    }
}