programa
{
	
	funcao inicio()
	{
		inteiro n, i=2, val=0
		escreva("Digite um número: ")
		leia(n)
		enquanto(i<n){
			se(n%i==00){
				val++
			}
			i++
		}
		se(val>0){
			escreva("Não é primo")
		}
		senao{
			escreva("É primo")
		}
	}
}
/* $$$ Portugol Studio $$$ 
 * 
 * Esta seção do arquivo guarda informações do Portugol Studio.
 * Você pode apagá-la se estiver utilizando outro editor.
 * 
 * @POSICAO-CURSOR = 65; 
 * @PONTOS-DE-PARADA = ;
 * @SIMBOLOS-INSPECIONADOS = ;
 * @FILTRO-ARVORE-TIPOS-DE-DADO = inteiro, real, logico, cadeia, caracter, vazio;
 * @FILTRO-ARVORE-TIPOS-DE-SIMBOLO = variavel, vetor, matriz, funcao;
 */