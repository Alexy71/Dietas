<?php
session_start();
include('conexion.php');
include('CV.php');

$correo=$_POST['correo'];
$contrasena=$_POST['contrasena'];

$sql = "SELECT id, perfil_profesional, correo, contrasena, nombre,
 apellido, universidad, titulo, ci, edad from _cv 
 where correo='$correo' and contrasena='$contrasena';";

$query = mysqli_query($conexion,$sql);
$fila = mysqli_fetch_array($query);

$_SESSION['_cv']=new CV($fila['perfil_profesional'], $fila['correo'], $fila['contrasena'], $fila['nombre'], $fila['apellido'], $fila['universidad'], $fila['titulo'], $fila['ci'],$fila['edad']);

$_SESSION['_cv']->setId($fila['id']);
$_SESSION['_cv']->setNombreCompleto($fila['nombre'], $fila['apellido']);
echo $_SESSION['_cv']->getId();
?>