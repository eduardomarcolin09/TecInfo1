// Faça um script que verifique se todos os
// elementos de um vetor são pares ou não  

let vetor = [2,4,6]
let x  = 0
let y = 0
while(x < vetor.length){
    if(vetor[x] % 2 === 0){
        y++
    }
    x++
}

if(y === vetor.length){
    console.log('Todos são pares')
}
else{
    console.log('Nem todos são pares')
}
