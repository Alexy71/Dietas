function verMas_tip(x){
    var contenedor = document.getElementById('tip'+x);
    
    var ajax = new XMLHttpRequest() 
    ajax.open("post", "../static/php/blog.php", true);
    var cadena = "id_tip="+x+"&corto=F";
    ajax.onreadystatechange = function () {
        if (ajax.readyState == 4) {
            contenedor.innerHTML = ajax.responseText
            contenedor.innerHTML += "<button onclick='javascript:verMenos_tip("+x+")'>ver menos</button>"
        }
    }

    ajax.setRequestHeader("Content-Type", "application/x-www-form-urlencoded"); // esta linea es importante
    ajax.send(cadena);
}

function verMenos_tip(x) {
    var contenedor = document.getElementById('tip'+x);
    
    var ajax = new XMLHttpRequest() 
    ajax.open("post", "../static/php/blog.php", true);
    var cadena = "id_tip="+x+"&corto=T";
    ajax.onreadystatechange = function () {
        if (ajax.readyState == 4) {
            contenedor.innerHTML = ajax.responseText
            contenedor.innerHTML += "<button onclick='javascript:verMas_tip("+x+")'>ver mas</button>"
        }
    }

    ajax.setRequestHeader("Content-Type", "application/x-www-form-urlencoded"); // esta linea es importante
    ajax.send(cadena);
}

function suscribirse_profesional(x) {
    alert(x)
}