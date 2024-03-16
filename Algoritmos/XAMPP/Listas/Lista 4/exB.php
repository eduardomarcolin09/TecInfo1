<?php
    // b) Escreva um algoritmo para determinar se um dado número N (digitado pelo
    // usuário) é positivo, negativo ou neutro (zero). Imprima o resultado na tela.

    $g = $_GET;

    if($g['n'] > 0){
        echo('O número é positivo');
    }
    else if($g['n'] < 0){
        echo('O número é negativo');
    }
    else{
        echo('O número é neutro(zero)');
    }