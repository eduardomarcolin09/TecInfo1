const codigoCandidato1 = 20;
const codigoCandidato2 = 89;
const codigoCandidato3 = 17;

const nomeCandidato1 = "Mordecai"
const nomeCandidato2 = "Gumball"
const nomeCandidato3 = "Finn"

const partidoCandidato1 = "Apenas um Show"
const partidoCandidato2 = "O incrível mundo de Gumball"
const partidoCandidato3 = "Hora da Aventura"

const fotoCandidato1 = './Candidato/Mordecai - Apenas um Show.jpg' 
const fotoCandidato2 = './Candidato/Gumball - Gumball e Darwin Wattson.jpg'
const fotoCandidato3 = './Candidato/Finn - Hora da Aventura.jpg'

let digitos = 0

function tecla(event){
    if (event.key === 'Backspace') {
        corrigir()
    }
    else if(event.key === 'Enter'){
        confirmar()
    }
    else{
        const n = parseInt(event.key)
        if (n == NaN) return;
        num()
    }
}

function mostraDados(n, p, f) {
    const nome = document.getElementById('nomec')
    const partido = document.getElementById('partidoc')
    const foto = document.getElementById('fotoc')
    nome.innerHTML = n
    partido.innerHTML = p
    foto.src = f 
}

function anular(){
    alert('Você votou nulo!')
    corrigir(true)
}

function mostrarCandidato(){
    const bt1 = document.getElementById('bt1')
    const bt2 = document.getElementById('bt2') 
    const n = parseInt(bt1.innerHTML) * 10 + parseInt(bt2.innerHTML)

    if (digitos !== 2) {
        mostraDados("", "", "")
    }else if (n === codigoCandidato1) {
        mostraDados(nomeCandidato1,partidoCandidato1, fotoCandidato1)
    }else if (n === codigoCandidato2) {
        mostraDados(nomeCandidato2,partidoCandidato2, fotoCandidato2)
    }else if (n === codigoCandidato3) {
        mostraDados(nomeCandidato3,partidoCandidato3, fotoCandidato3)
    }else {
        alert("Candidato Inválido")
        corrigir(true)
    }
}

function num(n){
    if (digitos === 0) {
        bt1.innerHTML = n
        digitos++
    }else if (digitos === 1){
        bt2.innerHTML = n
        digitos++
    }
    mostrarCandidato()
}

function corrigir(todos = false){
    if (!todos){
        if (digitos === 2) {
            bt1.innerHTML = ''
            digitos--
        }else if (digitos === 1){
            bt2.innerHTML = ''
            digitos--
        }
    }else{
        bt2.innerHTML = ''
        bt1.innerHTML = ''
        digitos = 0
    }
    mostrarCandidato()
}

function confirmar(){
    digitos= 2
    if(digitos !== 2){
        return;
    }else{
        alert('Voto confirmado!')
        corrigir(true)
    }
}