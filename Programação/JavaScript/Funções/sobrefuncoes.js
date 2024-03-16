// Funções JavaScript

// const valores = [2,3,4,5,6,7]

// Função - MAP

// const novo = valores.map(function(/*valor*/a,/*posicao*/b,/*vetor*/c){
//     console.log(a,b,c)
//     return 'R$' + a.toFixed(2)
//     return a * 2
//  })
//  console.log(novo)

//  const novo = valores.map(v=>v*2)
//  console.log(valores, novo)


// function (valor){
//     return valor*2
// }

// (valor) => {
//     return valor * 2
// }

// valor => valor * 2


// Função - FILTER

// const novo2 = valores.filter(function(valor){
//     return false
// })

//  const novo2 = valores.filter(function(valor){
//     return valor % 2 === 0 
//  })

//  const novo2 = valores.filter(valor => valor % 2 === 0)
//  console.log(valores, novo2)

// Função - EVERY

// EVERY (E lógico) V e V e V | Todos verdadeiros

// const todosPares = valores.every(valor => valor % 2 === 0)
// console.log(valores, todosPares)

// Função - SOME

// SOME (Ou lógico) V ou F ou F | Pelo menos um verdadeiro

// const peloMenosUm = valores.some(valor => valor % 2 === 0)
// console.log(valores, peloMenosUm)

// Função - REDUCE

// não copiei ou sla

// Faça um script que defina a variável soma com a 
// soma total dos numeros do vetor.
const vetor = [2,4,5,7,8,9,3,4]
let soma = 0
// for(let i = 0; i < vetor.length; i++){
//    soma = soma + vetor[i]
// }
// console.log(soma)

// const x = vetor.reduce(function(ant, atual){
//    console.log(ant, atual)
//   return ant
// }, 0)

const x = vetor.reduce((ant, atual) => ant+atual, 0)
console.log(x)

// Qual o produto de todos os núemros do vetor
const p = vetor.reduce((ant, atual) => ant*atual, 1)
console.log(p)

// Encontrar o maior número do vetor
// const vetor2 = [-1,-2,-3,-4]
// let maior = vetor2[0]
// for(let i = 0; i < vetor2.length;i++){
//   if(vetor2[i] > maior){
//    maior = vetor2[i]
//   }
//} 
//console.log(maior)

const maior = vetor.reduce(function(ant , atual){
    if(ant > atual) return ant
    return atual
}, vetor[0])
console.log(maior)