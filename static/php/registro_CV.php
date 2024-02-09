<?php
session_start();
include('conexion.php');
include('CV.php');

$perfil_profesional=$_COOKIE['perfil_profesional'];
$correo=$_COOKIE['correo'];
$contrasena=$_COOKIE['contrasena'];

$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$universidad = $_POST['universidad'];
$titulo = $_POST['titulo'];
$ci = $_POST['ci'];
$edad = $_POST['edad'];


$_SESSION['_cv']=new CV($perfil_profesional, $correo, $contrasena, $nombre, $apellido, $universidad, $titulo, $ci, $edad);

$sql = "INSERT into _cv(perfil_profesional, correo, contrasena , nombre, apellido, universidad, titulo, ci, edad)
 values('$perfil_profesional', '$correo', '$contrasena', '$nombre', '$apellido', '$universidad', '$titulo', '$ci', '$edad')";
$query = mysqli_query($conexion,$sql);

$sql_fecha = "SELECT id from _cv ORDER BY id DESC limit 1";

$query_fecha = mysqli_query($conexion,$sql_fecha);

$fila = mysqli_fetch_array($query_fecha);
$_SESSION['_cv']->setId($fila['id']);
echo $sql;
?>