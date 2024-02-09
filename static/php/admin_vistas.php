<?php
    include('conexion.php');
	$sql="SELECT id_cliente, fecha, COUNT(id_cliente) as visitas from visitas_pagina GROUP BY id_cliente";
	$query=mysqli_query ($conexion, $sql);
?>
    <div style="width: 60%; margin: auto;">
    <h2>visitas</h2>
    <table border="1">
        <tr>
            <th>Id cliente</th>
            <th>Visitas</th>
            <th>fecha</th>
        </tr>
        <?php while ($fila = mysqli_fetch_array($query)){?>
	    <tr>
            <td><?php echo $fila['id_cliente'] ?></td>
            <td><?php echo $fila['visitas'] ?></td>
            <td><?php echo $fila['fecha'] ?></td>
	    </tr>
     <?php
    }
    ?>
    </table>
    <button><a href="cerrar_sesion.php">Cerrar sesion</a></button>
    </div>
