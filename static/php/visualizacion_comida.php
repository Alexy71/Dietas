<?php
include('conexion.php');

$id = $_POST['id'];

$sql="SELECT id, calorias, grasas, proteinas, carbohidratos, colesterol, nombre
from alimentos where id=$id;";
$query = mysqli_query($conexion,$sql);

$sql2="SELECT id,  nombre from alimentos where id=$id;";
$query2 = mysqli_query($conexion,$sql2);
$fila12 = mysqli_fetch_array($query2)
?>

<table border="1">
    <tr>
        <th colspan="5">Por cada Gr de <?php echo $fila12['nombre']?> </th>
    </tr>
    <tr>
		<th>calorias</a></th>
		<th>grasas</th>
		<th>proteinas</a></th>
		<th>carhohidratos</a></th>
		<th>colesterol</a></th>
	</tr>
	<?php while ($fila = mysqli_fetch_array($query)){?>
	<tr>
		<td><?php echo $fila['calorias'] ?></td>
		<td><?php echo $fila['grasas'] ?></td>
		<td><?php echo $fila['proteinas'] ?></td>
		<td><?php echo $fila['carbohidratos'] ?></td>
		<td><?php echo $fila['colesterol'] ?> </td> 
	</tr>
     <?php
 }
 ?>

</table>