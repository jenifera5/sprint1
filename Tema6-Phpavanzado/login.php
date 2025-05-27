<?php 
session_start();

if($_SERVER["REQUEST_METHOD"]==="POST"){
   if(isset($_POST['nombre']) && !empty($_POST['nombre']))  {
    $nombre =$_POST["nombre"];
  echo "nombre recibido correctamente " ."<br>";
  echo "Bienvenido/a: ".$nombre ."<br>";
  echo '<a href="logout.php">Cerrar sesion</a>';
}else{
echo" No has escrito el nombre";
}

}




?>