// Faça um script que crie um novo vetor
// somente com os números pares que estão no primeiro 

let vetor = [1,2,3,4,5,6]
let pares = []

for (let i = 0 , j = 0 ; i < vetor.length ; i++){
    if(vetor[i] % 2 === 0){
        pares[j] = vetor[i]
        console.log(pares[j])
        j++
    }
}