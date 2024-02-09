<?php
include('conexion.php');
include('CV.php');

session_start();
$perfil_profesional=$_POST['perfil_profesional'];
$correo_electronico=$_POST['correo_electronico'];
$contrasena=$_POST['contrasena'];

$aux = $_SESSION['_cv']->getId();

$sql = "UPDATE _cv set perfil_profesional='$perfil_profesional', correo_electronico='$correo_electronico',
 contrasena='$contrasena' where id=$aux";

$_SESSION['_cv']->setPerfil_Profesional($perfil_profesional);
$_SESSION['_cv']->setCorreo_electronico($correo_electronico);
$_SESSION['_cv']->setcontrasena($contrasena);
echo $sql;
$query = mysqli_query($conexion,$sql);

mysqli_close($conexion);
?>