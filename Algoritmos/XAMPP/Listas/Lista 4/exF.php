<?php
    // f) Haverá uma competição de Taekwondo e será preciso dividir os atletas em
    // diferentes categorias. Escreva um algoritmo que receba a idade de um(a)
    // competidor(a) e, em seguida, imprima em qual categoria será alocado(a). A
    // escolha da categoria deve ser realizada com <select>.
    // Categoria Idade
    // Infantil A 5 – 7 anos
    // Infantil B 8 – 10 anos
    // Juvenil A 11 – 13 anos
    // Juvenil B 14 – 17 anos
    // Sênior Maiores de 18 anos 

    $g = $_GET;

    if($g['idade'] == '5-7a'){
        echo('Categoria: Infantil A');
    }
    else if($g['idade'] == '8-10a'){
        echo('Categoria: Infantil B');
    }
    else if($g['idade'] == '11-13a'){
        echo('Categoria: Juvenil A');
    }
    else if($g['idade'] == '14-17a'){
        echo('Categoria: Juvenil B');
    }
    else{
        echo('Categoria: Sênior');
    }
    