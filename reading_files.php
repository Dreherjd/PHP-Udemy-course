<?php

$file = "example.txt";

if($handle = fopen($file, 'r')){
   echo $content = fread($handle, filesize($file)); //each bit is a character
    fclose($handle);
}else{
 echo "the file could not be written";   
}


?>