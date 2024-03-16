// DOM: Document Object Model
// Para recuperar um elemento HTML com JavaScript
// devemos utilizar o objeto document

// Recuperando um elemento pelo ID
const botao = document.getElementById('botao')
botao.style.backgroundColor = 'blue'
botao.style.color='red'
console.log(botao)

// Recuperando elementos pelo nome da tag
//const divs = document.getElementsByTagName('div')
//console.log(divs[0])

//definndo uma função nova
function mudartexto(){
// Acessando um HTML inteiro de um elemento
const div=document.getElementById('texto1')
console.log(div.innerHTML)
div.innerHTML="Outro valor"
}

function mudarcor(){
    // Acessando um HTML inteiro de um elemento
    const div=document.getElementById('texto2')
    console.log(div.innerHTML.backgroudColor)
    div.innerHTML.backgroundColor="red"
}

// Solicitar para o usúario pelo prompt
// o nome dele. Após, trocar no html
// o conteúdo do span pelo nome do usuário;
//const nome = prompt("Digite o seu nome")
//const span = document.getElementById('nome')
//span.innerHTML = nome

// Solicitar para o usúario pelo prompt
// o nome dele. Após, trocar no html
// o conteúdo do span pelo nome do usuário;
//function apresetar(){
   // const nome = prompt("Digite o seu nome")
    //const span = document.getElementByIdElementById('boasvindas')
    //div.style.display=''
//}

// Define uma função para ser executada quando
// terminar de carregar  a página.
// onload=function(){
//Recuperando elemento pelo ID
//const botao = document.getElementById('botao')
//botao.stylebackgroundColor='blue'
//}