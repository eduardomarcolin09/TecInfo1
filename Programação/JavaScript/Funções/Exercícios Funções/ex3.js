// Criar um formulário com um input type 
// color e um botão. Quando clicar no botão
//
function trocarCor(){
    const input = document.getElementById('cor')
    const body = document.body 
    body.style.backgroundColor = input.value
}