<?php
include('../static/php/Pagos.php');
session_start();
?>

<div class="chance_status">
    <div>
        <i class="far fa-user"></i>
        <p><input type="text" id="quincenal" value="<?php echo $_SESSION['plan_pago']->getquincenal(); ?>"></p>
        <button type="button" onclick="javascript:actualizar_pago_quincenal()">Actualizar el plan de pagos quincenal</button>
    </div>
</div>