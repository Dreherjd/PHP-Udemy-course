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

//create the object
$bmw = new Car();
//notice there is not a dollar sign on wheels
//it is already there above
echo $bmw->wheels . "<br>";


$truck = new Car();
echo $truck->wheels = 10 . "<br>";
$truck->create_doors();
echo $truck->doors;




?>