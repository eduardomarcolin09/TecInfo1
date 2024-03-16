<?php
    // a) Construa um algoritmo que receba dois valores numéricos inteiros e efetue a
    // adição; caso o resultado seja maior que 10, imprima-o na tela.

    $g = $_GET;
    $soma = $g['n1'] + $g['n2'];

    if($soma > 10){
        echo('A soma é maior que 10, resultado da soma: ' . $soma);
    }
    
    
    