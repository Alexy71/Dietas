<?php
    include('../static/php/conexion.php');
	$sql="select id ,nombre_alimento from tipo_alimentos";    
	$query=mysqli_query ($conexion, $sql);
?>

<div class="suscripcion_profesional registro">
    <h3>Registro de comidas</h3>
    <div class="cambios">
        <div>
            <label for="">Tipo alimento </label><br>
            <label for="">Alimento </label><br>
            <label for="">Cantidad </label>
        </div>
        <div>
            <select id="tipo_comida" onchange="javascript:chance_meals(this)">
                <option>
                    Tipo de comidas
                </option>
                <?php while ($alimentos = mysqli_fetch_array($query)){?>
                <option  value="<?php echo $alimentos['id']; ?>">
                    <?php echo $alimentos['nombre_alimento'];?>
                </option>
                <?php 
                }
                ?>  
            </select><br>
                
            <select id="comidas" onchange="javascript:register_meals()">
                <option value="">
                    comidas
                </option>
            </select><br>
            <input type="number" placeholder="cantidad" id="cantidad_alimento"> 
        </div>
    </div>
    <div class="chances">
            <button type="button" onclick="javascript:registro_alimentos()">Registrar</button>
    </div>
</div>
<div>
    <div id="visualizacion">

    </div>
    <hr><br>
    <div id="registrado">

    </div>
</div>