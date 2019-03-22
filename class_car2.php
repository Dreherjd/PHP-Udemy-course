<?php

class Car{
    //class methods are just functions inside classes
    function move_wheels(){
        echo "the wheels are moving";
    }
}

    //methods are just functions inside classes
if(method_exists("Car", "move_wheels")){
    echo "it does in fact exist";
}else{
    die("hello");
}

// if(class_exists("Car")){
//     echo "it does exists";
// }else{
//     echo "it does not exist";
// }



?>