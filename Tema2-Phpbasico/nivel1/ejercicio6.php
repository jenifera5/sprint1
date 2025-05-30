<?php
function isBitten() {
    $resultado=rand(0, 1) ==1;
if ($resultado) {
 echo "Charlie me mordió el dedo!";
 
}else {
    echo "Charlie no me mordió el dedo!";
}
return $resultado;
}
isBitten();

?>