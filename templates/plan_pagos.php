<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
    
    <script src="../static/js/plan_pagos.js"></script>
    <link rel="stylesheet" href="../static/css/plan_pagos.css">
    <title>plan de pagos</title>
    <?php
        include('../static/php/Pagos.php');
        session_start();
    ?>
</head>
<body>
    
    <div class="container">

        <div class="left">
            <div class="tareas">
                <ul>
                    <li><i class="fas fa-user-edit"></i><a href="javascript:cargarContenido('plan_pagos_quincenal.php')">Quincenal</a></li>
                    <li><i class=""></i><a href="javascript:cargarContenido('plan_pagos_mensual.php')"> Mensual</a></li>
                    <li><i class=""></i><a href="javascript:cargarContenido('plan_pagos_anual.php')"> Anual</a></li>
                    <li><i class=""></i><a href="javascript:cargarContenido('plan_pagos_ofertas.php')"> ofertas</a></li>
                </ul>
            </div>
        </div>

        <div class="center" id="center">
            <h2>Actualizar el plan de pagos</h2>
        </div>
    </div>
</body>
</html>


