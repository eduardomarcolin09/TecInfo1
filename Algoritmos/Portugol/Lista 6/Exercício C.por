programa
{
	inclua biblioteca Matematica
	
	funcao inicio()
	{
		real preco, quantidade, desconto, resul
		inteiro contador= 1, contador2= 1
		escreva("Preço por página: ")
		leia(preco)
		escreva("Porcentagem de desconto: ")
		leia(desconto)
		escreva("A partir de qual quantidade: ")
		leia(quantidade)
		desconto=1-(desconto/100)
		enquanto(contador <= 200){
			enquanto(contador2 <= 10){
				se(contador >= quantidade){
					resul = (contador*preco)*desconto
				}
				senao{
					resul = contador*preco
				}
				escreva(contador, "=", Matematica.arredondar(resul, 2), " ")
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
 * @POSICAO-CURSOR = 607; 
 * @PONTOS-DE-PARADA = ;
 * @SIMBOLOS-INSPECIONADOS = ;
 * @FILTRO-ARVORE-TIPOS-DE-DADO = inteiro, real, logico, cadeia, caracter, vazio;
 * @FILTRO-ARVORE-TIPOS-DE-SIMBOLO = variavel, vetor, matriz, funcao;
 */