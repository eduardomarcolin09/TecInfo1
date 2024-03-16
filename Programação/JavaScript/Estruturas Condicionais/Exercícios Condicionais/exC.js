// Faça um scrpit que receba 2 números e informe se o primeiro é múltiplo do segundo

const x = parseFloat(prompt("Digite o primeiro número"))
const y = parseFloat(prompt("Digite o segundo número"))

if(x % y === 0){
    alert('O primeiro número é múltiplo do segundo')
}
else{
    alert('Não é Múltiplo')
}