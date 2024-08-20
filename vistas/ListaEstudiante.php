<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.101.0">
    <title>Navbar Template · Bootstrap v4.6</title>

  
    
    <!-- Bootstrap core CSS -->



    <!-- Bootstrap core CSS -->
    <!-- Custom styles for this template -->
    <link href="navbar.css" rel="stylesheet">
  </head>
  <body>
<?php 
include("enlaces.php");
include("menu.php");
 ?>

<div class="container">

      <div class="row">
        <div class="col-sm-2">  
        </div>
        <div class="col-sm-8">
          <h1>Lista de Estudiantes</h1>
          <table class="table">
  <thead>
    <tr>
      <th scope="col">Nombre</th>
      <th scope="col">Apellidos</th>
      <th scope="col">fecha de nacimiento</th>
      <th scope="col">Carrera</th>
      <th scope="col">opciones</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <?php
    include("../modelo/conexion.php");
    $query= "SELECT * FROM estudiantes";     
    $res=$conexion->query($query);
While ($row = $res->fetch_assoc())
                                {
           ?>                        
    <td> <?php echo $row['Id_estudiante']; ?> </td>
    <td>  <?php echo $row['nombre']; ?> </td>
    <td>  <?php echo $row['apellido']; ?> </td>
    <td>  <?php echo $row['fecha_nacimiento']; ?> </td>
    <td>  <?php echo $row['carrera']; ?> </td>
    <td class="text-center">
        <a href="Actualizacion/ECategoria.php?ide=<?php echo $row['Id_estudiante'];?>" class="btn btn-xs btn-danger" data-toggle="tooltip" title="Eliminar">
            <span class="fas fa-trash"></span>Modificar</a>
          </div>
        </td>
        <td class="text-center">
        <a href="eliminar/ECategoria.php?ide=<?php echo $row['Id_estudiante'];?>" class="btn btn-xs btn-orange" data-toggle="tooltip" title="Eliminar">
            <span class="fas fa-trash"></span>Eliminar</a>
          </div>
        </td>
    </tr>  
     <?php

 }
?>  
  </tbody>
</table>

    
        </div>
        <div class="col-sm-2">
          
        </div>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
      </div>
</div>

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>




  </body>
</html>
