// Faça um script que verifique se pelo menos um 
// elemento de um vetor é par ou não

let vetor = [1,3,2]
todosPares = false

for(let i = 0 ; i < vetor.length ; i++){
    if(vetor[i] % 2 === 0){
        continue
    }
    todosPares = true
    break

}
if(todosPares = false){
    console.log('Pelo menos um é par')
}
else{
    console.log('Todos são ímpares')
}

// não funcionou, não consegui terminar