<?PHP include("conexion_bd.php");


$nro_reserva=$_POST["nro_reserva"];
$fecha_hora=$_POST["fecha_hora"];
$origen=$_POST["origen"];
$destino=$_POST["destino"];
$precio_viaje=$_POST["precio_viaje"];
$num_asiento=$_POST["num_asiento"];
$tipo=$_POST["tipo"];

mysql_query("INSERT INTO reservas (nro_reserva,fecha_hora) VALUES ($nro_reserva,'$fecha_hora')");
//mysql_query("INSERT INTO viajes (origen, destino,precio_viaje) values ('$origen','$destino','$precio_viaje')");
//mysql_query("INSERT INTO asientos (num_asientos,tipo_pasillo_ventanilla) values ('$num_asiento','$tipo')");

mysql_close();
printf("Se han guardado los datos");
printf($nro_reserva);
printf($fecha_hora);
printf($origen);
printf($destino);
printf($precio_viaje);
printf($num_asiento);
printf($tipo);
?>
