<!doctype html>
<html lang="en">
  <head>
    
  </head>
  <body>
<?php 
include("enlaces.php");
include("menu.php");
 ?>

<div class="container">

      <div class="row">
        <div class="col-sm-4">  
        </div>
        <div class="col-sm-4">
          <h1>Registro de estudiante</h1>
        <form method="POST" action="../controlador/crtEstudiante.php" >
          <label>Nombre</label>
          <input class="form-control" type="text" name="nombre"> <br>
          <label>Apellidos</label>
          <input class="form-control" type="text" name="apellido"> <br>
          <label>Fecha</label>
          <input class="form-control" type="Date" name="fecha"><br>
          <label>Carrera</label>
         <input class="form-control" type="TEXT" name="carrera">
          <br>
          <button type="submit" name="add_cat" class="btn btn-primary">Guardar</button>
          <input type="button" class="btn btn-info" value="Cancelar">

        </form> 
        </div>

        <div class="col-sm-4">
          
        </div>

      </div>
</div>



  </body>
</html>
