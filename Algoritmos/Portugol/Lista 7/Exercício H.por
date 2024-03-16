programa
{
	
	funcao inicio()
	{
		cadeia resposta, lista = ""
		cadeia produto = "p1"
		real preco = 0.0, total = 0
		
		escreva("+----------------------------", "\n")
		escreva("+ Lista de compras           ", "\n")
		escreva("+----------------------------", "\n")
		escreva("Quer inserir mais um produto (s/n)?", "\n")
		leia(resposta)
		enquanto(resposta == "s"){
			escreva("\n", "Nome do produto: ")
			leia(produto)
			escreva("Preço do produto: ")
			leia(preco)
			limpa()
			escreva("\n")
			lista = lista+"+ "+produto+"\t"+"R$ "+preco+"\n"
			escreva("+----------------------------", "\n")
			escreva("+ Lista de compras           ", "\n")
			escreva("+----------------------------", "\n")
			escreva(lista)
			total+=preco
			escreva("+----------------------------", "\n")
			escreva("+ Total","		", total, "\n")
			escreva("\n","Quer inserir mais um produto (s/n)?", "\n")
			leia(resposta)
			escreva("\n")
			
		}
		escreva("Obrigado por utilizar nossos serviços :-)")
	}
}
/* $$$ Portugol Studio $$$ 
 * 
 * Esta seção do arquivo guarda informações do Portugol Studio.
 * Você pode apagá-la se estiver utilizando outro editor.
 * 
 * @POSICAO-CURSOR = 809; 
 * @PONTOS-DE-PARADA = ;
 * @SIMBOLOS-INSPECIONADOS = ;
 * @FILTRO-ARVORE-TIPOS-DE-DADO = inteiro, real, logico, cadeia, caracter, vazio;
 * @FILTRO-ARVORE-TIPOS-DE-SIMBOLO = variavel, vetor, matriz, funcao;
 */