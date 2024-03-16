programa
{
	
	funcao inicio()
	{
		inteiro num = 1 ,pares=0, impares = 0, contP=0, contI=0
		enquanto(num != 0){
			escreva("Digite o número: ")
			leia(num)
			se(num != 0){
				se(num % 2 == 0){
				pares=pares+num
				contP++
			}
			senao{
				impares=impares+num
				contI++
			}	
			}
			
		}
		escreva("O somatório dos números pares é: ", pares, "\n")
		escreva("O total de números pares é: ", contP, "\n")
		escreva("O somatório dos números ímpares é: ", impares, "\n")
		escreva("O total de números ímpares é: ", contI, "\n")
		
	}
}
/* $$$ Portugol Studio $$$ 
 * 
 * Esta seção do arquivo guarda informações do Portugol Studio.
 * Você pode apagá-la se estiver utilizando outro editor.
 * 
 * @POSICAO-CURSOR = 284; 
 * @PONTOS-DE-PARADA = ;
 * @SIMBOLOS-INSPECIONADOS = ;
 * @FILTRO-ARVORE-TIPOS-DE-DADO = inteiro, real, logico, cadeia, caracter, vazio;
 * @FILTRO-ARVORE-TIPOS-DE-SIMBOLO = variavel, vetor, matriz, funcao;
 */