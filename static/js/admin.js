function cargarContenido(abrir) {
    var contenedor;
    contenedor = document.getElementById('center');
    var ajax = new XMLHttpRequest() 
    ajax.open("get", abrir, true);
    ajax.onreadystatechange = function () {
        if (ajax.readyState == 4) {
            contenedor.innerHTML = ajax.responseText
        }
    }
    ajax.setRequestHeader("Content-Type", "text/html; charset=utf-8");
    ajax.send(null);
}

function iniciarSesion() {
    var correo = document.getElementById('correo').value
    var contrasena = document.getElementById('contrasena').value
    
    if (correo =='admin@admin.com' && contrasena=='admin') {
        window.location.href = "../static/php/admin_perfil.php";
    }
}