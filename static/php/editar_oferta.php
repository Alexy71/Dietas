<?php
include('conexion.php');
include('Pagos.php');

session_start();
$duracion = $_POST['duracion'];
$descripcion = $_POST['descripcion'];
$precio = $_POST['precio'];

$sql_id = "select id, duracion, descripcion, precio";
$sql_fecha = "SELECT id from plan_pago ORDER BY id DESC limit 1";
echo $sql_fecha;
$query_fecha = mysqli_query($conexion,$sql_fecha);
$fila = mysqli_fetch_array($query_id);
$id = $fila['id'];

$sesion = $_SESSION['plan_pago']->getid();
$sql = "update plan_pago set duracion='$duracion', descripcion='$descripcion', precio='$precio' where id= $sesion";

$_SESSION['plan_pago']->setduracion($duracion);
$_SESSION['plan_pago']->setdescripcion($descripcion);
$_SESSION['plan_pago']->setprecio($precio);

echo $sql;
$query = mysqli_query($conexion,$sql);

mysqli_close($conexion);
?>