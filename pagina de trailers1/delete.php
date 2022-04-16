<?php

include("conexion.php");
$con=conectar();

$idPelicula=$_GET['id'];

$sql="DELETE FROM peliculas  WHERE idPelicula='$idPelicula'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: administracion.php");
    }
?>