/*      Objetos

    Contém um conjunto finito de propriedades e funções

    =-=-= Sintaxe =-=-=
    
    const pessoa = {nome: 'Eduardo'}

    -> Mostrar valor da propriedade:
    * console.log(pessoa.nome)
    
    -> Atribuição:
    * pessoa.sobrenome = 'Marcolin'
    
    -> Remoção de propriedade:
    * delete pessoa.nome

    -> Exemplos:
    
    const pessoa = {nome: 'Eduardo', sobrenome:'Marcolin', idade:'16', curso:'Técnico em Informática'}

    // const nome = pessoa.nome
    // const sobrenome = pessoa.sobrenome
    // const idade = pessoa.idade 

    const {nome,sobrenome,idade} = pessoa

    // const vetor = [1,2]
    // const [n1,n2] = vetor
    
    function mostrar(){
        document.getElementById('nome').innerHTML = pessoa.nome
        document.getElementById('sobrenome').innerHTML = pessoa.sobrenome
    }

*/