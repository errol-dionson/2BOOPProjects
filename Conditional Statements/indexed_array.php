<?php

$numbers = array(1, 2, 3, 4, 5);

echo $numbers[0]; 
echo $numbers[1]; 


$numbers[] = 60;  


foreach($numbers as $number) {
    echo $number . "<br>";  
}
?>
