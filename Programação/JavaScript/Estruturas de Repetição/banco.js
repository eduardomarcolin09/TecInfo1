let saldo = 300

function sacar(){
    const saque = parseInt(prompt("Quanto deseja sacar?"))
    if(saque > saldo){
        alert("O valor que deseja sacar é maior que seu saldo disponível")
    }
    else if(saque < 0){
        alert("Não se pode sacar valor negativo")
    }
    else {
        saldo = saldo - saque
        alert("Você conseguiu sacar e o saque foi descontado")
    }

}

function depositar(){
    const vd = parseInt(prompt("Qunato deseja depositar?"))
    if(vd < 0){
        alert("Não se pode depositar valor negativo")
    }
    else if(vd > 0){
        saldo = saldo + vd
        alert("Seu saldo foi depositado")
    }

}

function versaldo(){
    alert(saldo)
}