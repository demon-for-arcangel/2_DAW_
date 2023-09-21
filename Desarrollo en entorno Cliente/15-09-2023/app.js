const persona = {
    nombre: 'Marina',
    apellido: 'Laguna',
    dni: '05938561',
    correo: 'marinalaguna2004@gmail.com',
    pwd: 'admin123',
    asignaturas: ['Servidor', 'Cliente']
}

function acceder(){
    var email = document.querySelector('input[type = "email"]').value
    var password = document.querySelector('input[type = "password"]').value

    if (email == persona.correo && password == persona.pwd){
        window.location.href = 'pagina.html'
    }else{
        alert('Correo electrónico o contraseña incorrecto.')
    }
}

function guardar(){
    var validado = validarDatos ()
    if (validado) {
        // Guardar los datos en el objeto persona
        persona.nombre = document.getElementById('nombre').value
        persona.apellido = document.getElementById('apellido').value

        alert('Datos guardados correctamente.')
    }
}

function validarLogin(){
    var correo = document.getElementById("correo").value
    var contrasena = document.getElementById("contrasena").value

    if (correo.trim() == "" || contrasena.trim() == ""){ //el método trim() elimina los espacios en blanco en ambos extremos del string
        alert('El correo y la contraseña no pueden estar vacíos')
    }

    if (contrasena.length < 8){
        alert('La contraseña debe ser de 8 carácteres como mínimo.')
        return false;
    }

    window.location.href = "pagina.html";
    return false;
}

function validarDatos(){}

function limpiar(){
    document.getElementById('nombre').value = ''
    document.getElementById('apellido').value = ''
}
