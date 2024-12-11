<?php
$num = array(1, 4, 6, 11, 20);
echo "Los 5 números enteros son: ";
for ($i = 0; $i < count($num); $i++) {
    echo $num[$i];  
    if ($i < count($num) - 1) {
        echo ", ";  
    }
}
?>