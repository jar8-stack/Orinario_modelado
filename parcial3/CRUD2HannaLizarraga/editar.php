<?php
 include("conexion.php");
 ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>EDITAR</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <style>
    form {
      max-width: 500px;
    }
    </style>
  </head>
  <body>
    <img src="images/restaurant20.png" class="img-fluid" alt="Responsive image">
    <?php
     if(isset($_POST['enviar'])){
       $id=$_POST['id'];
       $nombre=$_POST['nombre'];
       $nocontrol=$_POST['nocontrol'];

       $sql="update alumnos set nombre='".$nombre."',
       nocontrol='".$nocontrol."'where id='".$id."'";

       $resultado=mysqli_query($conexion,$sql);

       if($resultado){
                echo "<script language='javascript'>
                 alert('Los datos fueron ingresados correctamente a la BD');
                 location.assign('index.php');
                 </script>";
       }else{

           echo "<script language='javascript'>
                 alert('Los datos no se actualizaron correctamente a la BD');
                 location.assign('index.php');
           </script>";
         }

       mysqli_close($conexion);

     }else{
       $id=$_GET['id'];
       $sql="select * from alumnos where id='".$id."'";
       $resultado=mysqli_query($conexion,$sql);

       $fila=mysqli_fetch_assoc($resultado);
       $nombre=$fila['nombre'];
       $nocontrol=$fila['nocontrol'];

       mysqli_close($conexion);

     ?>
     <div class="container">
       <h1>Editar Alumno</h1>
       <form action="<?=$_SERVER['PHP_SELF']?>" method="post">
         <label>Nombre:</label>
         <input class="form-control" type="text" name="nombre" value="<?php echo $nombre;?>"> <br>
         <label>No. Control</label>
         <input class="form-control" type="text" name="nocontrol" value="<?php echo $nocontrol;?>"> <br>
         <input type="hidden" name="id" value="<?php echo $id;?>">
         <input class="btn btn-primary mb-2" type="submit" name="enviar" value="ACTUALIZAR">
         <a href="index.php">Regresar</a>
       </form>
     </div>
    <?php
     }
    ?>
  </body>
</html>
