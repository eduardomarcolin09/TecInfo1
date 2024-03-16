programa
{
	
	funcao inicio()
	{
		real recebido, compra, troco, n100=0, n50=0, n20=0, n10=0, n5=0, n2=0
		escreva("Digite o valor da compra: ")
		leia(compra)
		escreva("Digite o valor que o cliente deu: ")
		leia(recebido)
		escreva("Troco é: ", troco=recebido-compra, "\n")
		enquanto(troco>100){
			n100++
			troco-=100
		}
		enquanto(troco>50){
			n50++
			troco-=50
		}
		enquanto(troco>20){
			n20++
			troco-=20
		}
		enquanto(troco>10){
			n10++
			troco-=10
		}
		enquanto(troco>5){
			n5++
			troco-=5
		}
		enquanto(troco>2){
			n2++
			troco-=2
		}
		escreva("Nota(s) de 100: ", n100,"\n")
		escreva("Nota(s) de 50: ", n50,"\n")
		escreva("Nota(s) de 20: ", n20,"\n")
		escreva("Nota(s) de 10: ", n10,"\n")
		escreva("Nota(s) de 5: ", n5,"\n")
		escreva("Nota(s) de 2: ", n2,"\n")
		escreva("E mais R$ ", troco, " em moedas")

		}

		
	}

/* $$$ Portugol Studio $$$ 
 * 
 * Esta seção do arquivo guarda informações do Portugol Studio.
 * Você pode apagá-la se estiver utilizando outro editor.
 * 
 * @POSICAO-CURSOR = 793; 
 * @PONTOS-DE-PARADA = ;
 * @SIMBOLOS-INSPECIONADOS = ;
 * @FILTRO-ARVORE-TIPOS-DE-DADO = inteiro, real, logico, cadeia, caracter, vazio;
 * @FILTRO-ARVORE-TIPOS-DE-SIMBOLO = variavel, vetor, matriz, funcao;
 */