// Faça um script que receba um número inteiro e
// informe a resposta baseada na seguinte função:
//          {1, se x menor ou igual a 1
// f(x) =   {2, se x maior que 1 e menor ou igual a 2
//          {x², se x maior que 2 e menor ou igual a 3
//          {x³, se x maior que 3

let x = parseFloat(prompt("Digite o número"))

if(x <= 1){
    alert(1)
}
else if(x <= 2 ){
    alert(2)
}
else if(x <= 3){
    alert(x * x)
}
else{
    alert(x * x * x)
}