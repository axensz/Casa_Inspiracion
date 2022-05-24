var variable = 0;
function toggleButton()
{
    var usuario = document.getElementById('usuario').value;
    var password = document.getElementById('password').value;

    if (usuario && password) {
        document.getElementById('button_editar').disabled = false;
    } else {
        document.getElementById('button_editar').disabled = true;
        alert("El campo usuario y contraseña son requeridos");
    }
}

