<?php

$file = "example.txt";

if($handle = fopen($file, 'w')){
    fwrite($handle, 'this is example text');
    fclose($handle);
}else{
 echo "the file could not be written";   
}


?>