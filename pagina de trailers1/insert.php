<?php
include("conexion.php");
$con=conectar();

$idPelicula=$_POST['idPelicula'];
$titulo=$_POST['titulo'];
$director=$_POST['director'];
$reseña=$_POST['reseña'];
$actores=$_POST['actores'];
$año=$_POST['año'];
$url=$_POST['url'];


$sql="INSERT INTO peliculas VALUES('$idPelicula','$titulo','$director', '$reseña', '$actores', '$año', '$url')";
$query= mysqli_query($con,$sql);

if($query){
    Header("Location: administracion.php");
    
}else {
}
?>