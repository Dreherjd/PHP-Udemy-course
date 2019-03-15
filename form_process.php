<?php
if(isset($_POST['submit'])){

    $names = ["Kevin", "Justin", "Peter", "Josh", "Shithead", "Margo", "Thomas"];
    $min = 5;
    $max = 10;

    $username = $_POST['username'];
    $password = $_POST['password'];

    if(!in_array($username, $names)){
        echo "Sorry, you are not allowed.";
    }else{
        echo "You're in!";
    }

    if(strlen($username) < $min){
        echo "Username has to be 5 or more characters";
    } else if(strlen($username) > $max){
        echo "Username must be 10 characters or less";
    }

}
?>