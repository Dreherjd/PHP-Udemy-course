<?php

class Car{
    
    public $wheels = 4;
    #var $color = "Black";
    protected $hood = 1;
    private $engine = 1;
    var $doors = 4;
    
    //class methods are just functions inside classes
    function show_hood(){
        $this->hood;
    }
}

//create the object
$bmw = new Car();

echo $bmw->wheels . "<br>";
class Semi extends Car{
    
}

$semi = new Semi();
echo $semi->engine;

?>