<?php
session_start();
include('conexion.php');
include('Cliente.php');

$correo=$_POST['correo'];
$contrasena=$_POST['contrasena'];

$sql = "SELECT id, nombres, apellidos, celular, correo, contrasena, sexo, peso, altura, fecha_creacion from cliente where
 correo='$correo' and contrasena='$contrasena';";
$query = mysqli_query($conexion,$sql);
$fila = mysqli_fetch_array($query);

$_SESSION['cliente']=new Cliente($fila['nombres'], $fila['apellidos'], $fila['celular'],
$fila['correo'], $fila['contrasena'], $fila['sexo'], $fila['peso'], $fila['altura']);

$_SESSION['cliente']->setFecha($fila['fecha_creacion']);
$_SESSION['cliente']->setId($fila['id']);
$_SESSION['cliente']->setNombreCompleto($fila['nombres'], $fila['apellidos']);
echo $_SESSION['cliente']->getId();
//echo $_SESSION['cliente']->getNombreCompleto();
?>

