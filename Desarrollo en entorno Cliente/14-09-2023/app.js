var numeros = [1, 2, 3, 4]

numeros[1]

numeros.length

for (let i = 0; i <= numeros.length; i++){

}

numeros.push(5)
numeros.pop()

console.log(numeros)

var num = Math.round(Math.random() * 50)
console.log(num)

//añadir el elemento a la matriz al principio de esta 
/* numeros.unshift(0)
numeros.shift(2) */

var found = numeros.find(element => element == 3)
console.log(found)

var sublista = splice(numeros.length, 3)
console.log(numeros)