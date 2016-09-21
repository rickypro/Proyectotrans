<?php include("conexion_bd.php"); ?>
<html>
  <head>
    <title>Empresa trans</title>

  </head>
  <body>
    <p>Texto trans </p>
      <?php
      $resultado=mysql_query("Select * from clientes");
      $res=mysql_fetch_array($resultado);
      do {
        echo "<br/>Cedula ".$res['ci'];
        echo "<br/>nombre ".$res['nombre'];
      }while($res=mysql_fetch_array($resultado));

      ?>

  </body>
</html>
