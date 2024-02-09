<?php
session_start();
if (!isset($_SESSION['cliente'])){
 	header("Location: /trabajocom350dietas/templates/user_inteface.html");
}
?>