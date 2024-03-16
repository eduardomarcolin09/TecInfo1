// Faça um script que receba o salário de um funcionário e o valor
// da parcela que ele deseja conseguir. Informe se ele tem esse valor
// disponível. Regra: po valor da parcela não pode ultrapassar 25%
// do seu salário.

const valor = parseFloat(prompt("Digite o Valor do salário"))
let parcela = parseFloat(prompt("Digite o Valor da parcela"))
let limite = valor*0.25
if(parcela <= limite){
    alert('Você tem esse valor para retirar')
}
else{
    alert('Você não tem esse valor para retirar')
}