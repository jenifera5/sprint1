<?php
require_once 'cine.php';
require_once 'pelicula.php';
$cine1 = new Cine("CineBarna","Barcelona");
$cine1->addMovies(new Pelicula("Minecraft",110,"Jared Hess"));
$cine1->addMovies(new Pelicula("Lilo y Stitch",107," Chris Sanders y Dean DeBlois"));
$cine1->addMovies(new Pelicula("Misión imposible",169,"Christopher McQuarrie"));
$cine1->addMovies(new Pelicula("Destino Final",110,"Zach Lipovsky"));


$cine2 = new Cine("CineStar","Barcelona");
$cine2->addMovies(new Pelicula("Minecraft",110,"Jared Hess"));
$cine2->addMovies(new Pelicula("Lilo y Stitch",107," Chris Sanders y Dean DeBlois"));
$cine2->addMovies(new Pelicula("Misión imposible",169,"Christopher McQuarrie"));
$cine2->addMovies(new Pelicula("Destino Final",110,"Zach Lipovsky"));

$cines = [];
$cines[] = $cine1;
$cines[] = $cine2;
?>
<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">    
<title>Catalogo de Cines : </title>
<link rel="stylesheet" href="style.css">
</head>
<body>
<form method="GET"  action="">
<label for="Director">buscar director:</label>
<input type="text" name="director" id="director" placeholder="EJ:Jared Hess"required>
<button type="submit">Buscar</button>
</form>
<?php foreach($cines as $cine): ?>
 <h1>Cine : <?= $cine->getNombre();?></h1>
 <h2>Población : <?= $cine->getPoblacion();?></h2>

 <h3>Listado de Peliculas : </h3>
 <ul> 
    <?php foreach ($cine->getPeliculas() as $pelicula): ?>
      <li>
         <strong><?= $pelicula->getNombre(); ?></strong> |
        Duración : <?= $pelicula->getDuracion(); ?> min|
        Director : <?= $pelicula->getDirector(); ?>
      </li>    
    <?php endforeach; ?>
 </ul>

 <h3>Película más larga : </h3>
 <p><?= $cine->peliculaLarga(); ?></p>
<?php endforeach; ?>
 <?php if(isset($_GET['director'])) :?>
   <h3>Pelicula del Director : <?= htmlspecialchars($_GET['director'])?> : </h3>
   <p><?= $cine->buscarDirector($_GET['director']); ?></p>
  <?php endif;?>
</body>
</html>
