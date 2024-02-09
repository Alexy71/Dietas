<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link rel="stylesheet" href="../static/css/login.css">
    
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <title>Interfaz</title>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
  <title>Profesional</title>

  <?php
session_start();
include("../static/php/conexion.php");
$sql= "select id, nombres, apellidos, nombre_completo, sexo, peso, altura, fecha_creacion from cliente ";

if (isset($_GET['buscar'])){
	$buscar=$_GET['buscar'];
  $sql=$sql."WHERE nombres like '%$buscar%' ";
  $sql=$sql."OR apellidos like '%$buscar%' ";
  $sql=$sql."OR sexo like '%$buscar%' ";
}else
	$buscar="";


/*ORDENA */
if(isset($_GET['orden'])){
    $orden=$_GET['orden'];
    $tipo=$_GET['tipo'];
    if ($tipo=='ASC')
    	$nuevotipo='DESC';
    else
    	$nuevotipo='ASC';
	$sql=$sql.' ORDER BY '.$orden.' '.$tipo;
}else
  $orden="";

$query=mysqli_query ($conexion, $sql);?>

</head>
<body>
<!-- <div id= "cabeza">
  <form >
    <label for="buscar">nombre del cliente :</label>		
    <input type="text" name="buscar" placeholder="Introduzca" value="<?php echo $buscar?>">
    <input type="submit" value="buscar">
  </form>
</div> -->

<div class= "contenedor">
  <div id="titulo"> 
    <center><h1> DIETAYA, TUS CLIENTES</h1></center>
  </div>
    
  <table class="table table-hover">
    <thead>
      <tr style = "background-color: rgb(117, 199, 171);">
      <th scope="col"><a href="professional_perfil.php?orden=nombres&tipo=<?php echo $orden=='nombres'?$nuevotipo:'ASC';?>&buscar=<?php echo $buscar ?>">Nombre</a></th>
		  <th scope="col"><a href="professional_perfil.php?orden=apellidos&tipo=<?php echo $orden=='apellidos'?$nuevotipo:'ASC';?>&buscar=<?php echo $buscar ?>">Apellido</a></th>
		  <th scope="col"><a href="professional_perfil.php?orden=sexo&tipo=<?php echo $orden=='sexo'?$nuevotipo:'ASC';?>&buscar=<?php echo $buscar ?>">sexo</a></th>
        <th scope="col"> Dieta especifica</th>
        <th scope="col"> problema de salud</th>
      </tr>
    </thead>
    <tbody>
    <?php
    while ($fila = mysqli_fetch_array($query)){
    ?>
      <tr id= "fila">
        <td> <a onclick="javascript:ver_users('<?php echo $fila['id'] ?>')" href="../public_user_perfil.php" ><?php echo $fila['nombres'] ?></a></td>
        <td><?php echo $fila['apellidos'] ?></td>
        <td><?php echo $fila['sexo'] ?></td>
        <td>Bajo en grasa</td>
        <td>Diabetes</td>
      </tr>
    <?php
    }
    ?>
    </tbody>
  </table>
</div>
<script>
  function ver_users(params) {
    
  }
</script>
</body>
</html>  