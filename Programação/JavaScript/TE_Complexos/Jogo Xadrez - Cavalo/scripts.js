    // Trabalho feito por: Eduardo, Guilherme e João

    const posiciona =({x,y})=>console.log(x,y)

    let posicao = null

    // Verificando as posições possíveis do cavalo
    const verificarPosicao = (xc,yc) => {
        for (let i = 0 ; i < 8 ; i++) {
            for (let j = 0 ; j < 8 ; j++) {
                let btn = document.getElementById(`casa${i*8+j}`)
                btn.style.backgroundColor = (i + j) % 2 === 0 ? 'black' : 'white'
                if (// Calculando as posições
                    Math.abs(xc - i) > 0 && 
                    Math.abs(yc - j) > 0 && 
                    Math.abs(xc - i) <= 2 && 
                    Math.abs(yc - j) <= 2 && 
                    Math.abs(yc - j) !== 
                    Math.abs(xc - i) ) {
                    // Aplica a cor green nas posições possíveis através dos cálculos feitos
                    btn.style.backgroundColor = "green"
                } 
            }
        }
    }

    // Criação do Tabuleiro

    const tabuleiro = document.getElementById('tabuleiro')
    for (let i = 0; i<8; i++){
        for (let j = 0; j<8; j++){
        const d = document.createElement('button')
        d.setAttribute('type','button')
        d.setAttribute('id',`casa${i*8+j}`)
        d.setAttribute('data-x', i)
        d.setAttribute('data-y', j)
        const color = (i+j) %2 === 0 ? 'black' : 'white'
        d.setAttribute('class',`casa ${color}`)
        d.addEventListener('click', () => {
            posiciona(d.dataset)
            if (posicao !== null) {
                posicao.innerHTML = ''
            }
            // A partir do click do usuário, a img do cavalo é adicionada
            d.innerHTML = '<img src="cavalo.png" width="85px" height="85px">'
            posicao = d
    
            var x = parseInt(d.getAttribute('data-x'))
            var y = parseInt(d.getAttribute('data-y'))
            verificarPosicao(x,y)
        })
        tabuleiro.appendChild(d)
        }
    }