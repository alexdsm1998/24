<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Lista equipos</title>
  </head>
  <body>
    <?php
      include 'equipo.php';
      $equipo=new equipo();
      ?>
      <table border="1px">
         <tr>
           <th >Nombre</th>
           <th >Ciudad</th>
           <th >Conferencia</th>
           <th >Division</th>
           <th >Borrar</th>
         </tr>
      <?php
      $tablalista=$equipo->ListaEquipos();
      foreach ($tablalista as $fila) {
          echo "<tr><td>" .$fila["Nombre"] ."</td><td>" .$fila["Ciudad"] ."</td><td>" .$fila["Conferencia"] ."</td><td>" .$fila["Division"] ."</td><td><a href='borrarequipoDB.php?nombre=".$fila["Nombre"]."'>Borrar registro</a></td></tr>";
      }
     ?>
     </table>
  </body>
</html>
