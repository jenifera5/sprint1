<?php
$num = array(1, 4, 6, 11, 20);
echo "Los 5 números enteros son: ";

foreach ($num as $index => $value) {
    echo $value;
    if ($index < count($num) - 1) {
        echo ", ";
    }
}
?>
