<?php 
    include("conexion.php");
    $con=conectar();

$id=$_GET['id'];

$sql="SELECT * FROM peliculas WHERE idPelicula='$id'";
$query=mysqli_query($con,$sql);

$row=mysqli_fetch_array($query);
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
        <title>Actualizar</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
        
    </head>
    <body>
                <div class="container mt-5">
                    <form action="update.php" method="POST">
                    
                                <input type="hidden" name="idPelicula" value="<?php echo $row['idPelicula']  ?>">
                                
                                <input type="text" class="form-control mb-3" name="titulo" placeholder="Titulo" value="<?php echo $row['titulo']  ?>">
                                <input type="text" class="form-control mb-3" name="director" placeholder="Titulo" value="<?php echo $row['director']  ?>">
                                <input type="text" class="form-control mb-3" name="reseña" placeholder="Reseña" value="<?php echo $row['reseña']  ?>">
                                <input type="text" class="form-control mb-3" name="actores" placeholder="Actores" value="<?php echo $row['actores']  ?>">
                                <input type="text" class="form-control mb-3" name="año" placeholder="Año" value="<?php echo $row['año']  ?>">
                                <input type="text" class="form-control mb-3" name="url" placeholder="URL" value="<?php echo $row['url']  ?>">
                                
                            <input type="submit" class="btn btn-primary btn-block" value="Actualizar">
                    </form>
                    
                </div>
    </body>
</html>