<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Borrar equipo</title>
  </head>
  <body>
    <?php
      include 'equipo.php';
      $equipo=new equipo();

      $borrar=$equipo->BorrarEquipo($_GET["nombre"]);

      if ($borrar==true) {
       ?>
       <p>Borrado con exito</p>
       <a href="index.php">Ir a inicio</a>
       <a href="listaequipos.php"> Borrar otro registro</a>
       <?php
      }else {
        ?>
        <a href="listaequipos.php">No se ha podido borrar.</a>
        <?php
      }
     ?>

  </body>
</html>
