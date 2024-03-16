// 1. Mostrar todos os produtos na tabela (montar de forma dinâmica)
// 2. Criar uma função para o botão que alterne entre mostrar
//    todos os produtos ou somente os que possuem estoque
// 3. Desafio: Transformar o texto da célula nome em um botão:
//   ao clicar nele, os produtos precisam ser ordenados em ordem
//   crescente, ao clicar novamente, em order decrescente.

const data = [
    {name: "Batata", quantity: 1},
    {name: "Pera", quantity: 0},
    {name: "Abacate", quantity: 10},
    {name: "Abacaxi", quantity: 3},
    {name: "Banana", quantity: 0},
];

const montaTabela = (vetor) => {
  // 1 - Recuperar o elemento HTML
  const tbody = document.getElementById('produtos')
  tbody.innerHTML = ""

  for(let i = 0; i < vetor.length; i ++){
    // Criando uma TD
    const td1 = document.createElement('TD')
    // Adicionando um texto na Td
    td1.innerHTML = vetor [i].name
    // Criando uma TD
    const td2 = document.createElement('TD')
    // Adicionando um texto na TD
    td2.innerHTML = vetor [i].quantity

    // Criando uma linha
    const tr = document.createElement('TR')
    // Adicionando as tds como filhas da linha
    tr.appendChild(td1)
    tr.appendChild(td2)

    // Adicionando a linha como filha do tbody
    tbody.appendChild(tr)
  }
}

let todos = true

const botao = document.getElementById('botao')
botao.addEventListener('click', () => {
  botao.innerHTML = todos ? "Todos" : "Somente com estoque"
  todos = !todos

  // let outroVetor = data

  // if(!todos){
  //   outroVetor = data.filter(d => d.quantity > 0)
  // }
  
  // montaTabela(outroVetor)

  montaTabela(data.filter(d => d.quantity > 0 || todos))
})

montaTabela(data)

// localeCompare