programa
{
	
	funcao inicio()
	{
		inteiro pontoI, pontoF, num
		escreva("Digite o número: ")
		leia(num)
		escreva("Digite o ponto de partida: ")
		leia(pontoI)
		escreva("Digite o ponto de chegada: ")
		leia(pontoF)
		se(pontoI<=pontoF){
			enquanto(pontoI<=pontoF){
				escreva(num," x ",pontoI," = ",num*pontoI, "\n")
				pontoI++
			}
		}
		senao{
			enquanto(pontoI>=pontoF){
				escreva(num," x ",pontoI," = ",num*pontoI, "\n")
				pontoI--
			}
		}






		

	}
}
/* $$$ Portugol Studio $$$ 
 * 
 * Esta seção do arquivo guarda informações do Portugol Studio.
 * Você pode apagá-la se estiver utilizando outro editor.
 * 
 * @POSICAO-CURSOR = 433; 
 * @PONTOS-DE-PARADA = ;
 * @SIMBOLOS-INSPECIONADOS = ;
 * @FILTRO-ARVORE-TIPOS-DE-DADO = inteiro, real, logico, cadeia, caracter, vazio;
 * @FILTRO-ARVORE-TIPOS-DE-SIMBOLO = variavel, vetor, matriz, funcao;
 */