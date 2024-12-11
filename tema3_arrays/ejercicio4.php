<?php 
$aboutme = array(
    "nombre" => "Jenifer", 
    "edad" => "30", 
    "email" => "jeniferalvarez12@gmail.com", 
    "comida favorita" => "hamburguesa"
);

foreach ($aboutme as $key => $value) {
    echo $key . ": " . $value . "<br>";
}
?>
