<?php
include('conexion.php');
include('CV.php');
session_start();

$mensual = $_POST['mensual'];
$anual = $_POST['anual'];
$id_profesional = $_SESSION['_cv']->getId();


$sql = "INSERT into plan_pago(mensual, anual, id_profesional)
 values('$mensual', '$anual', '$id_profesional')";
//echo $sql;
$query = mysqli_query($conexion,$sql)
?>