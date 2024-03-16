// Faça um script que receba um número e informa se ele é positivo, negativo ou zero.

const x = parseFloat(prompt("Digite o número"))

if(x>0){
    alert('É positivo')
}
else if(x<0){
    alert('É negativo')
}
else{
    alert('É zero')
}