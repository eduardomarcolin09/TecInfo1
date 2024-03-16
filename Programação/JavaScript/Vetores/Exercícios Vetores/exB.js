// Faça um script que crie um novo vetor igual
// ao dobro do primeiro. Ex: [2,3,5] -> [4,6,10]

let vetor1 = [1,2,3,4,5,6]
let vetor2 = []
let x = 0
while(x < vetor1.length){
    vetor2[x] = vetor1[x]*2
    console.log(vetor2[x])
    x++
}
