// 2) Acrescente no exercício anterior para solicitar um número
// enquanto o usuário não informar um número positivo.

let x = parseInt(prompt("Digite o número"))
let y = 1

for(;x<1;){
    x= parseInt(prompt("Digite o número"))
}
for(;y<x;y++){
    console.log(y)
}
