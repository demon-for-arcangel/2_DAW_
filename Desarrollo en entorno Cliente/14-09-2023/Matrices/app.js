var participantes = ['María', 'Sonia', 'Clara', 'Maria Jose', 'Eva', 'Pilar']
console.log(participantes)

participantes[1] = 'Clara'
participantes[2] = 'Sonia'

console.log(participantes)

var eliminadas = []
// let eliminadas = participantes.splice(-3);

var p1 = participantes.pop(5)
eliminadas.push(p1)

var p2 = participantes.pop(4)
eliminadas.push(p2)

var p3 = participantes.pop(3)
eliminadas.push(p3)
console.log(eliminadas)

var eliminadosAnteriormente = ['Bea', 'Miriam']
console.log(eliminadas.concat(eliminadosAnteriormente))

var premios = ['150 euros', '100 euros', '50 euros']

for (let i = 0; i < 3; i++){
    console.log(`Nombre: ${participantes[i]}, Clasificación: ${i + 1}, Premio: ${premios[i]}`);
}

