<?php
session_start();
include('conexion.php');
include('Pagos.php');

$quincenal = $_COOKIE['quincenal'];
$mensual=$_COOKIE['mensual'];
$anual=$_COOKIE['anual'];

$duracion = $_POST['duracion'];
$descripcion = $_POST['descripcion'];
$precio = $_POST['precio'];

$_SESSION['plan_pago']=new Pagos($quincenal, $mensual, $anual, $precio, $duracion, $descripcion);

$sql = "insert into plan_pago(quincenal, mensual, anual, precio, duracion, descripcion)
values('$quincenal', '$mensual', '$anual', '$precio', '$duracion', '$descripcion')";
$query = mysqli_query($conexion,$sql);

$sql_fecha = "SELECT id from plan_pago ORDER BY id DESC limit 1";
$query_fecha = mysqli_query($conexion,$sql_fecha);

$fila = mysqli_fetch_array($query_fecha);
$_SESSION['plan_pago']->setId($fila['id']);
echo $_SESSION['plan_pago']->getId();
?>