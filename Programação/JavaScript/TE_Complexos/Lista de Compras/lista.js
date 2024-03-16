function adicionar(){
    let item = document.getElementById('item')
    let valor = item.value
    let lista = document.createElement('li')
    lista.innerHTML = valor
    let ul = document.getElementById('lista')
    ul.appendChild(lista)
    item.value = ""
}