<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Borrar jugador</title>
  </head>
  <body>
    <?php
      include 'jugador.php';
      $jugador=new jugador();

      $borrar=$jugador->Borrarjugador($_GET["codigo"]);

      if ($borrar==true) {
       ?>
       <p>Borrado con exito</p>
       <a href="index.php">Ir a inicio</a>
       <a href="listajugadores.php"> Borrar otro registro</a>
       <?php
      }else {
        ?>
        <a href="listajugadores.php">Error durante el borrado.</a>
        <?php
      }
     ?>
  </body>
</html>
