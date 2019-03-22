<?php

class Car{
    
    static $wheels = 4;
    #var $color = "Black";
    var $hood = 1;
    var $engine = 1;
    var $doors = 4;
    
    //class methods are just functions inside classes
    function move_wheels(){
        Car::$wheels = 10;
    }
}

//create the object
$bmw = new Car();
//no longer usable
//echo $bmw->wheels;

echo Car::$wheels;

//this is how to reference methods/functions
Car::move_wheels();


?>