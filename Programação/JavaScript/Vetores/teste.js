const vetor = []

let x 
    while((x = parseInt(prompt("Digite um número")))>0){
    vetor.push(x)
}
const total = vetor.length


let soma = 0
while(vetor.length > 0){
    const x = vetor.pop()
    soma = soma + x    
}

alert(soma / total)