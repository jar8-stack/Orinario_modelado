<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Agregar</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <style>
    form {
      max-width: 500px;
    }
    </style>
  </head>
  <body>
    <img src="images/restaurant19.png" class="img-fluid" alt="Responsive image">
    <?php
     if(isset($_POST['enviar'])){
       $nombre=$_POST['nombre'];
       $nocontrol=$_POST['nocontrol'];

       include("conexion.php");
       $sql="insert into alumnos(nombre,nocontrol)
       values('".$nombre."', '".$nocontrol."')";

       $resultado=mysqli_query($conexion,$sql);

       if($resultado){
         echo "<script language='javascript'>
               alert('Los datos fueron ingresados correctamente a la BD');
               location.assign('index.php');

         </script>";
       }
       mysqli_close($conexion);

     }else{
       ?>
    <div class="container">
      <h1>Agregar nuevo alumno</h1>
      <form action="<?=$_SERVER['PHP_SELF']?>" method="post">
        <label>Nombre:</label>
        <input class="form-control" type="text" name="nombre"> <br>
        <label>No.Control</label>
        <input class="form-control" type="text" name="nocontrol"> <br>
        <input class="btn btn-primary mb-2" type="submit" name="enviar" value="AGREGAR">
        <a href="index.php">Regresar</a>
      </form>
    </div>

    <?php
  }
    ?>
  </body>
</html>
