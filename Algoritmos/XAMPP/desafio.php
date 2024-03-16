<?php
    // Desafio desafiante desafiador

    // Fazer uma repetição para imprimir na tela todos os valores do vetor (: 

    $vetorN = [1,2,3,4];

    // Pode ser feita de diversos jeitos, os dois que anotei:

    // 1º Opção

    // for ($i = 0; $i < count($vetorN) ; $i++){
        // echo ($vetorN[$i]);
        // echo '<br>';
    // }
    
    // 2º Opção
    
    foreach($vetorN as $item){
        echo $item;
    }