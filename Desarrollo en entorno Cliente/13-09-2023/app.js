var nombreUsuario1 = 'José'
var primerApellido1 = 'Hernández'
var segundoApellido1 = 'Morales'

var nombreUsuario2 = 'María'
var primerApellido2 = 'Ruíz'
var segundoApellido2 = 'García'

var nombreUsuario3 = 'Sonia'
var primerApellido3 = 'Patón'
var segundoApellido3 = 'González'

Saludar(nombreUsuario1, primerApellido1, primerApellido2)
Saludar(nombreUsuario2, primerApellido2, segundoApellido2)
Saludar(nombreUsuario3, primerApellido3, segundoApellido3)

function Saludar(nombre, apellido1, apellido2){
    console.log('Hola ' + nombre + ' ' + apellido1 + ' ' + apellido2)
}

var edadUsuario1 = 18
var edadUsuario2 = 14
var edadUsuario3 = 20

var mayorEdad1 = false
var mayorEdad2 = false
var mayorEdad3 = false

function esMayorEdad(edad, mayorEdad){
    if (edad >= 18){
        mayorEdad = true
    }else{
        mayorEdad = false
    }
    console.log(mayorEdad)
}

esMayorEdad(edadUsuario1, mayorEdad1)
esMayorEdad(edadUsuario2, mayorEdad2)
esMayorEdad(edadUsuario3, mayorEdad3)

function sumarEdades(edad1, edad2, edad3){
    return edad1 + edad2 + edad3
}

var anosTotales = sumarEdades(edadUsuario1, edadUsuario2, edadUsuario3)
console.log('La suma de edades es la siguiente: ' + anosTotales)

function finalizar(nombre, apellido1, apellido2, mayorEdad){
    
}

/*-------------------------*/
//ejemplo
for (let i = 0; i < 10; i++){
    console.log(i)
}

var i = 0

while (i < 10){
    i++
    console.log(i)
}

i = 0
do{
    console.log(i)
    i++
}while(i <= 10)


var num = 2
switch (num) {
    case 1:
        console.log('Número 1')
    case 2:
        console.log('Número 2')
    default:
        console.log('Otro número')
}