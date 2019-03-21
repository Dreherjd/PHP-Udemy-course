<?php
$connection = mysqli_connect("localhost", "dreherjd", "", "practice7");
if($connection){
    echo "we are connected";
}else{
    die('database connection failed');
}





?>