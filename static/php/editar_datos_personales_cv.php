<?php
include('conexion.php');
include('CV.php');

session_start();
$nombre_completo = $_POST['nombre_completo'];

$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$universidad = $_POST['universidad'];
$titulo = $_POST['titulo'];
$ci = $_POST['ci'];
$edad = $_POST['edad'];
$correo_electronico = $_POST['correo_electronico'];
$contrasena = $_POST['contrasena'];

$aux = $_SESSION['_cv']->getId();


$sql = "UPDATE _cv set nombre='$nombre', apellido='$apellido', universidad='$universidad',
 titulo='$titulo', ci='$ci', edad='$edad', correo_electronico='$correo_electronico', contrasena='$contrasena' where
 id=$aux";
$query = mysqli_query($conexion,$sql);

$_SESSION['_cv']->setNombreCompleto1($nombre_completo);
$_SESSION['_cv']->setNombre($nombre);
$_SESSION['_cv']->setApellido($apellido);
$_SESSION['_cv']->setUniversidad($universidad);
$_SESSION['_cv']->setTitulo($titulo);
$_SESSION['_cv']->setCi($ci);
$_SESSION['_cv']->setEdad($edad);
$_SESSION['_cv']->setcontrasena($contrasena);
$_SESSION['_cv']->setcorreo_electronico($correo_electronico);

echo $sql;

?>