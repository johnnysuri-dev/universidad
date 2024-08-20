<?php
include('../modelo/conexion.php');

$non=$_POST['nombre'];
$des=$_POST['descripcion'];

$query="INSERT INTO tipo_archivo (Nombre,Descripcion) 
VALUES ('$non','$des')";

$res=$conexion->query($query);
if($res){
   echo '<script language="javascript">alert("Se guardo con exito");</script>';
        header("location:../vistas/categoria.php");
      } else {
        header("location:../vistas/categoria.php");
      }

?>
