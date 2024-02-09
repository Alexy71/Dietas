<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../static/css/general_index.css">
    <link rel="stylesheet" href="../static/css/blogs.css">
    <script src="../static/js/blogs.js"></script>
    <title>Document</title>
<?php
    include('../static/php/conexion.php');
    $sql="SELECT tips.id_profesional, tip, tips.titulo, nombre, apellido,
    perfil_profesional, experiencia_laboral, apellido from tips 
    LEFT JOIN _cv ON  tips.id_profesional = _cv.id
    where tipo_tip='A' limit 1;";
	$query=mysqli_query($conexion, $sql);
    $fila = mysqli_fetch_array($query);
    
    $sql1="SELECT tips.id, tips.id_profesional, tip, tips.titulo, nombre, apellido,
    perfil_profesional, experiencia_laboral, apellido from tips 
    LEFT JOIN _cv ON  tips.id_profesional = _cv.id
    where tipo_tip='P' and tips.id > 1;";
    $query1= mysqli_query($conexion, $sql1);
?>
</head>
<body>
<nav>
    <div class="nav">
        <div class="nav-left">
            <a href="../index.html"><img src="../static/imgs/logo.png" alt="sana manzaca"></a>                               
        </div>
        <div class="nav-right">
            <p><a href="">Profesionales</a></p>
            <p><a href="blogs.php">Blogs</a></p>
            <p><a href="user_perfil.php">Tu cuenta</a></p>
            <p><a href="">Calculadora</a></p>
        </div>
    </div>
</nav>
    <div class="container">
        <h1>Explora articulos</h1>
        <div class="message">
            <div><img src="../static/imgs/123.jpg" alt=""></div>
            <div>
                <h2><?php echo $fila['titulo']?></h2>
                <p><?php echo $fila['tip']?></p>
                <div class="profesional_information">
                    <div><img src="../static/imgs/123.jpg" alt=""></div>
                    <p><?php echo $fila['nombre'].' '.$fila['apellido']; ?></p>
                    <p><?php echo $fila['experiencia_laboral']?> años en la industria</p>
                </div>
            </div>     
        </div><br><br>
            <?php
            while($fila1 = mysqli_fetch_array($query1)){?>
            <div class="contenido">
                <div><img src="../static/imgs/123.jpg" alt=""></div>
                <div>
                    <div class="suscription">
                        <h2><?php echo $fila1['titulo']?></h2><button onclick="javascript:suscribirse_profesional(<?php echo $fila1['id_profesional']?>)">Suscribirse</button>
                    </div>
                    <?php
                    $small_tip = substr($fila1['tip'],0,200).'...';
                    ?>
                    <p id="<?php echo 'tip'.$fila1['id']?>"><?php echo $small_tip?> <button onclick="javascript:verMas_tip(<?php echo $fila1['id']; ?>)">ver mas</button></p>
                    <div class="profesional_information">
                        <div><img src="../static/imgs/123.jpg" alt=""></div>
                        <p><?php echo $fila1['nombre'].' '.$fila1['apellido']; ?></p>
                        <p><?php echo $fila1['experiencia_laboral']?> años en la industria</p>
                    </div>
                </div>
            </div><br>
            <?php
            }
            ?>
    </div>
</body>
</html>