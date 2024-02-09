<?php
include('../static/php/Pagos.php');
session_start();
?>

<div class="chance_status">
    <div>
        <i class="far fa-user"></i>
        <p><input type="text" id="mensual" value="<?php echo $_SESSION['plan_pago']->getmensual(); ?>"></p>
        <button type="button" onclick="javascript:actualizar_pago_mensual()">Actualizar el plan de pagos mensual</button>
    </div>
</div>