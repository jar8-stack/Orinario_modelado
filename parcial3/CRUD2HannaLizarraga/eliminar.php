<?php
$id=$_GET['id'];
include("conexion.php");

$sql="delete from alumnos where id='".$id."'";

$resultado=mysqli_query($conexion,$sql);

if($resultado){
         echo "<script language='javascript'>
          alert('Los datos fueron eliminados correctamente a la BD');
          location.assign('index.php');
          </script>";
}else{

    echo "<script language='javascript'>
          alert('Los datos no se eliminaron correctamente a la BD');
          location.assign('index.php');
    </script>";
  }
?>
