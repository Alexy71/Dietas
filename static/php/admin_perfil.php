<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/user_perfil.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
    <script src="../js/user_perfil.js"></script>
    <title>Only healty</title>
</head>
<body>
    <div class="container">
        <div class="left">
            <div>
                <img src="../imgs/123.jpg" alt="imagen">
            </div>
            <div>
                <p>Administrador</p>
            </div>
            <div class="tareas">
                <ul>
                    <li><i class="fas fa-hands-helping"></i><a href="javascript:cargarContenido('admin_vistas.php')"> Visitas</a></li>
                </ul>
            </div>
        </div>

        <div class="center" id="center">
            <div class="firsti">
                <h2>Editar perfil</h2>
            </div>
            <label for="">Nombre de usuario</label><br>
            <input type="text" id="username" style="width: 180px;" value="Administrador">

            <div>
                <button><a href="cerrar_sesion.php">Cerrar sesion</a></button>
            </div>
        </div>
    </div>
</body>
</html>