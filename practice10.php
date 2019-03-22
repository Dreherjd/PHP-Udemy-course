<?php

//make a class called dog
//set some properties
//make a method that shows all
class Dog{
    var $eye_color = "Blue";
    var $nose = "Black";
    var $fur_color = "brown";
    
    
    function show_all(){
        echo $this->eye_color;
        echo $this->nose;
        echo $this->fur_color;
    }
}

//instantiate the class and call the object pitbull ARF
$pitbull = new Dog();

//call the show all method
$pitbull->show_all();


?>