<?php

class Car{
    
    var $wheels = 4;
    #var $color = "Black";
    var $hood = 1;
    var $engine = 1;
    var $doors = 4;
    
    //class methods are just functions inside classes
    function move_wheels(){
        $this->wheels = 10;
    }
    
    function create_doors(){
        $this->doors = 6;
    }
}

class Plane extends Car{
    var $wheels = 18;
    var $engine = 4;
}

//create the object
$jet = new Plane();
echo $jet->wheels;
echo $jet->engine;



?>