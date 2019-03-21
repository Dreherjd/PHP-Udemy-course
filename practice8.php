<?php
$variable = "password";

$hash = "$2y$10$";
$salt = "iusesomecrazystrings22";

$hash_and_salt = $hash . $salt;
 $variable = crypt($variable, $hash_and_salt);
echo $variable;


?>