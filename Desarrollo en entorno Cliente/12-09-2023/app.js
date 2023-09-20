var nombre = 'Marina'
var apellido = 'Laguna'

console.log(typeof(nombre))

var edad = 19
console.log(typeof(edad))
var mayorEdad = true
console.log(typeof(mayorEdad))

function saludame(){
    console.log('Hola', nombre, apellido)
}

if (edad >= 18){
    mayorEdad = true
}else{
    mayorEdad = false
}
console.log(mayorEdad)