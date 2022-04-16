function ir() {

    var correo = document.getElementById("ususario").value;
    var contraseña = document.getElementById("password").value;
    if (correo == "luis@gmail.com" && contraseña == 12345) {
        window.location = "administracion.php";
    } else {
        alert("Usuario o contraseña incorrecta. ¡Intente Nuevamente!");

    }

}