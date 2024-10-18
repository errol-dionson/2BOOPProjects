<?php
$place = array(
    1 => "Pablo",
    2 => "Ken",
    3 => "Ismak",
    4 => "David",
    5 => "Kenny"
);

echo $place[1]; 
echo $place[2]; 

$place[6] = "Frank";  

foreach($place as $number => $name) {
    echo "Number: $number, Name: $name <br>";  
}
?>
