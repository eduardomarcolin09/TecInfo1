programa
{
	
	funcao inicio()
	{
		real valor
		inteiro contador = 1, contador2 = 1
		escreva("Digite o valor do xerox: ")
		leia(valor)
		enquanto(contador<=200){
			enquanto(contador2<=10){
				escreva(valor, " x ", contador, " = ", valor*contador, " | ")
				contador++
				contador2++
			}
			escreva("\n")
			contador2=1
			
			
			
		}
	}
}
/* $$$ Portugol Studio $$$ 
 * 
 * Esta seção do arquivo guarda informações do Portugol Studio.
 * Você pode apagá-la se estiver utilizando outro editor.
 * 
 * @POSICAO-CURSOR = 253; 
 * @PONTOS-DE-PARADA = ;
 * @SIMBOLOS-INSPECIONADOS = ;
 * @FILTRO-ARVORE-TIPOS-DE-DADO = inteiro, real, logico, cadeia, caracter, vazio;
 * @FILTRO-ARVORE-TIPOS-DE-SIMBOLO = variavel, vetor, matriz, funcao;
 */