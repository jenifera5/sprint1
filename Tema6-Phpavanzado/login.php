<?php 
session_start();

if($_SERVER["REQUEST_METHOD"]==="POST"){
   if(!empty($_POST['nombre']) && isset($_POST['edad']))  {
    $nombre = $_POST['nombre'];
    $edad = $_POST['edad'];
    $email = $_POST['email'];


    $_SESSION['nombre']=$nombre;
    $_SESSION['edad']=$edad;
    $_SESSION['email']=$email;

  echo "datos recibidos correctamente " ."<br>";
  echo "Bienvenido/a: ".$_SESSION['nombre'] ."<br>";
  echo "Edad: ".$_SESSION['edad'] ."<br>";
   echo "Email: ".$_SESSION['email'] ."<br>";


  echo '<a href="logout.php">Cerrar sesion</a>';
}else{
echo" Falta rellenar el nombre";
}

}




?>