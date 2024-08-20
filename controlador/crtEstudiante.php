<?php
include('../modelo/conexion.php');

$nom=$_POST['nombre'];
$ape=$_POST['apellido'];
$fe=$_POST['fecha'];
$car=$_POST['carrera'];
$query="INSERT INTO estudiantes(nombre, apellido, fecha_nacimiento, carrera) VALUES ('$nom','$ape','$fe','$car')";


$res=$conexion->query($query);
if($res){
        header("location:../vistas/ListaEstudiante.php");
      } else {
      echo '<script language="javascript">alert("No se guardo");</script>';
      }

?>

   