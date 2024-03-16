programa
{
	
	funcao inicio()
	{
		inteiro n1,n2
		escreva("Digite o número 1: ")
		leia(n1)
		escreva("Digite o número 2: ")
		leia(n2)
		enquanto(n1<n2){
			se(n1%2==0){
				escreva(n1, "\n")
			}
			n1++
		}
		enquanto(n2<n1){
			se(n2%2==0){
				escreva(n2, "\n")
			}
			n2++
		}
	}
}
/* $$$ Portugol Studio $$$ 
 * 
 * Esta seção do arquivo guarda informações do Portugol Studio.
 * Você pode apagá-la se estiver utilizando outro editor.
 * 
 * @POSICAO-CURSOR = 229; 
 * @PONTOS-DE-PARADA = ;
 * @SIMBOLOS-INSPECIONADOS = ;
 * @FILTRO-ARVORE-TIPOS-DE-DADO = inteiro, real, logico, cadeia, caracter, vazio;
 * @FILTRO-ARVORE-TIPOS-DE-SIMBOLO = variavel, vetor, matriz, funcao;
 */