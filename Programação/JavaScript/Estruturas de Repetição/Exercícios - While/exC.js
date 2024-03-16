let x = parseInt(prompt("Digite o número"))
let y = 1

while(x<0){
     x= parseInt(prompt("Digite o número"))
}

if(x==1){
    alert("Não existe números menores que esse")
}
 
while(y<x){
        console.log(y)
        y++
}