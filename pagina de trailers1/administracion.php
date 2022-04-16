<?php 
    include("conexion.php");
    $con=conectar();

    $sql="SELECT *  FROM peliculas";
    $query=mysqli_query($con,$sql);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Open+Sans:wght@300;400;600&display=swap" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!--  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">-->
    <link rel="stylesheet" href="css/admin.css">
    <title>Administración</title>
</head>

<body>

<header>
        <div class="container">
            <H2 class="logo">
                MoviePedi
            </H2>
            <nav>
                <a href="index.html">Inicio</a>
                <a href="#" class="activo">Detalles</a>
                <a href="log_in.html">Cerrar Sesión</a>
            </nav>
        </div>-

    <!--BUSCADOR 

    <div id="ctn-bars-search">
        <input type="text" id="inputSearch" placeholder="¿Qué deseas buscar?">
    </div>

    <ul id="box-search">
        <li><a href="articulo.html"><i class="fas fa-search"></i>HTML</a></li>
        <li><a href="articulo.html"><i class="fas fa-search"></i>CSS</a></li>
        <li><a href="articulo.html"><i class="fas fa-search"></i>JavaScript</a></li>
        <li><a href="articulo.html"><i class="fas fa-search"></i>PHP</a></li>
        <li><a href="articulo.html"><i class="fas fa-search"></i>NODEJS</a></li>
        <li><a href="articulo.html"><i class="fas fa-search"></i>VUEJS</a></li>
        <li><a href="articulo.html"><i class="fas fa-search"></i>Como hacer</a></li>
        <li><a href="articulo.html"><i class="fas fa-search"></i>Como crear</a></li>
    </ul>

    <div id="cover-ctn-search"></div>-->

<div class="container mt-5" id="formulario">
                    <div class="row"> 
                        
                        <div class="col-md-3" id="formu">
                            <h1>Ingrese datos:</h1>
                                <form action="insert.php" method="POST">

                                    <input type="text" class="form-control mb-3" name="idPelicula" placeholder="Id Pelicula:">
                                    <input type="text" class="form-control mb-3" name="titulo" placeholder="Título:">
                                    <input type="text" class="form-control mb-3" name="director" placeholder="Director:">
                                    <input type="text" class="form-control mb-3" name="reseña" placeholder="Reseña:">
                                    <input type="text" class="form-control mb-3" name="actores" placeholder="Actores:">
                                    <input type="text" class="form-control mb-3" name="año" placeholder="Año:">
                                    <input type="text" class="form-control mb-3" name="url" placeholder="URL:">
                                    
                                    <input type="submit" class="btn btn-primary" id="btn-primary" value="Enviar">
                                </form>
                        </div>

                        <div class="col-md-8" id="partbd">
                            <table class="table" >
                                <thead class="table-success table-striped" id="table-success">
                                    <tr>
                                        <th>Código:</th>
                                        <th>Título:</th>
                                        <th>Director:</th>
                                        <th>Reseña:</th>
                                        <th>Actores:</th>
                                        <th>Año:</th>
                                        <th>URL:</th>

                                    </tr>
                                </thead>

                                <tbody>
                                        <?php
                                            while($row=mysqli_fetch_array($query)){
                                        ?>
                                            <tr>
                                                <th><?php  echo $row['idPelicula']?></th>
                                                <th><?php  echo $row['titulo']?></th>
                                                <th><?php  echo $row['director']?></th>  
                                                <th><?php  echo $row['reseña']?></th>
                                                <th><?php  echo $row['actores']?></th>
                                                <th><?php  echo $row['año']?></th>
                                                <th><?php  echo $row['url']?></th>  
                                                <th><a href="actualizar.php?id=<?php echo $row['idPelicula'] ?>" class="btn btn-info">Editar</a></th>
                                                <th><a href="delete.php?id=<?php echo $row['idPelicula'] ?>" class="btn btn-danger" >Eliminar</a></th>                                        
                                            </tr>
                                        <?php 
                                            }
                                        ?>
                                </tbody>
                            </table>
                        </div>
                    </div>  
            </div>

            <script src="JS/administracion.js"></script>
</body>

</html>