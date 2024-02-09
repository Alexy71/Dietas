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

function actualizar_datos_personales() {
    var nombre_completo = document.getElementById('username').value;
    var nombres = document.getElementById('nombre').value;
    var apellidos = document.getElementById('apellido').value;

    var ajax = new XMLHttpRequest() 
    ajax.open("post", "../static/php/editar_datos_personales_cliente.php", true);
    var cadena = "nombre_completo="+nombre_completo+"&nombres="+nombres+"&apellidos="+apellidos;
    ajax.onreadystatechange = function () {
        if (ajax.readyState == 4) {
            //console.log(ajax.responseText)
            location.reload();
        }
    }

    ajax.setRequestHeader("Content-Type", "application/x-www-form-urlencoded"); // esta linea es importante
    ajax.send(cadena);
}

function actualizar_correo() {
    var correo = document.getElementById('correo').value;

    console.log(correo)

    var ajax = new XMLHttpRequest() 
    ajax.open("post", "../static/php/editar_correo.php", true);
    var cadena = "correo="+correo;
    ajax.onreadystatechange = function () {
        if (ajax.readyState == 4) {
            location.reload();
        }
    }

    ajax.setRequestHeader("Content-Type", "application/x-www-form-urlencoded"); // esta linea es importante
    ajax.send(cadena);
}

function actualizar_password() {
    var contrasena = document.getElementById('contrasena').value;
    console.log(contrasena)

    var ajax = new XMLHttpRequest() 
    ajax.open("post", "../static/php/editar_contrasena.php", true);
    var cadena = "contrasena="+contrasena;
    ajax.onreadystatechange = function () {
        if (ajax.readyState == 4) {
            //console.log(ajax.responseText);
            location.reload();
        }
    }

    ajax.setRequestHeader("Content-Type", "application/x-www-form-urlencoded"); // esta linea es importante
    ajax.send(cadena);
}

function eliminar_cuenta() {
    var ajax = new XMLHttpRequest() 
    ajax.open("post", "../static/php/eliminar_cuenta_cliente.php", true);
    ajax.onreadystatechange = function () {
        if (ajax.readyState == 4) {
            alert('nos apena que nos dejes, vuelve cuando quieras')
            window.location="/trabajocom350dietas/"
        }
    }

    ajax.setRequestHeader("Content-Type", "application/x-www-form-urlencoded"); // esta linea es importante
    ajax.send(null);
   
}


function registro_alimentos() {
    var id_Comida = document.getElementById('comidas').value
    var cantidad_alimento = document.getElementById('cantidad_alimento').value;

    var contenedor = document.getElementById('registrado');

    var ajax = new XMLHttpRequest() 
    ajax.open("post", "../static/php/insertar_alimentos.php", true);
    var cadena = "id_alimentos="+id_Comida+"&cantidad="+cantidad_alimento;
    ajax.onreadystatechange = function () {
        if (ajax.readyState == 4) {
            //console.log(ajax.responseText);
            contenedor.innerHTML += ajax.responseText
            //location.reload();
        }
    }

    ajax.setRequestHeader("Content-Type", "application/x-www-form-urlencoded"); // esta linea es importante
    ajax.send(cadena);
}

function burcar_fecha_comida() {
    var fecha = document.getElementById('fecha').value;
    var contenedor = document.getElementById('tabla_meal');
    

    var ajax = new XMLHttpRequest() 
    ajax.open("post", "../static/php/buscar_fecha_comida.php", true);
    var cadena = "fecha="+fecha;
    ajax.onreadystatechange = function () {
        if (ajax.readyState == 4) {
            contenedor.innerHTML = ajax.responseText
            //console.log(ajax.responseText);
            //location.reload();
        }
    }

    ajax.setRequestHeader("Content-Type", "application/x-www-form-urlencoded"); // esta linea es importante
    ajax.send(cadena);
}


/*registro de alimentos- sprint3*/
alimentos=""
function chance_meals(x) {
    var parametro = "idcomida=" + x.value;
    var ajax = new XMLHttpRequest() //crea el objetov ajax 
    ajax.open("get", "../static/php/chance_meals.php?" + parametro, true);
    ajax.onreadystatechange = function () {
        if (ajax.readyState == 4) {
            alimentos=eval(ajax.responseText)
            cargarComidas()
        }
    }
    ajax.setRequestHeader("Content-Type", "text/html; charset=utf-8");
    ajax.send();
}

function cargarComidas(){
    selComida=document.getElementById('comidas');
    selComida.innerHTML = ''
    selComida.appendChild( new Option('comida', 0));
    for (var i=0 ;i<alimentos.length;i++){
        selComida.appendChild( new Option(alimentos[i].nombre, alimentos[i].id));
    }
}

function register_meals() {
    var id_tipoComida = document.getElementById('tipo_comida').value
    var id_Comida = document.getElementById('comidas').value
    visualizacion_meals(id_Comida)
}

function visualizacion_meals(id_Comida) {
    var contenedor = document.getElementById('visualizacion');
    
    var ajax = new XMLHttpRequest() 
    ajax.open("post", "../static/php/visualizacion_comida.php", true);
    var cadena = "id="+id_Comida;
    ajax.onreadystatechange = function () {
        if (ajax.readyState == 4) {
            contenedor.innerHTML = ajax.responseText
            //console.log(ajax.responseText);
            //location.reload();
        }
    }

    ajax.setRequestHeader("Content-Type", "application/x-www-form-urlencoded"); // esta linea es importante
    ajax.send(cadena);
}