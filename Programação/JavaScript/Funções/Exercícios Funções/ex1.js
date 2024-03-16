const cria = (tam=10) => {
    const r = []
    while(tam>0){
        r.push({
            estoque: parseInt(Math.random()*20),
            valor: parseInt(Math.random()*10000)/100
        })
        tam--
    }
    return r
}
const produtos = cria (5)
console.log(produtos)

// 1) Faça um script que retorne os produtos sem estoque
// console.log(produtos)
// const semEstoque = produtos.filter(function(produto){
//    if (produto.estoque === 0) return true

//    return false
//})
// const semEstoque = produtos.filter(p => p.estoque === 0)
// console.log(semEstoque)

// const maisQue15 = produtos.filter(p => p.estoque > 15)
// console.log(maisQue15)

// 2) Faça um script que verifique se tem algum produto sem estoque
// const peloMenosUmSemEstoque = produtos.some(p => p.estoque === 0)
// console.log(peloMenosUmSemEstoque)

// 3) Faça um script que verifique se todos os produtos possuem 2 em estoque
// const peloMenosDoisEmEstoque = produtos.every(p => p.estoque >=2)
// console.log(peloMenosDoisEmEstoque)

// 4) Faça um script que diga quanto tem cada produto
// const novo3 = produtos.map(p => p.estoque * p.valor)
// console.log(novo3)

// 5) Calcule o desconto de 30% nos produtos com estoque igual a 19
// const resposta = produtos.filter(p => p.estoque === 19). map(p => p.valor * 0.7) 
// console.log(resposta)

// Calcular o total da empresa( estoque * valor)
const total = produtos.reduce((ac, atual) => ac + atual.estoque * atual.valor, 0)
console.log(total)