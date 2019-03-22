<?php

class Car{
    
    var $wheels = 4;
    #var $color = "Black";
    var $hood = 1;
    var $engine = 1;
    var $doors = 4;
    
    //constructors run everytime you make a new instance of a class
    function __construct(){
        echo $this->wheels = 10;
    }
}



$bmw = new Car();

$truck = new Car();

?>