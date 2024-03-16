<?php
    // e) Escreva um algoritmo que receba a idade de uma pessoa e indique se ela é: menor
    // de idade, maior de idade, idosa (60 anos ou mais).

    $g = $_GET;

    if($g['idade'] < 18){
        echo('A pessoa informada, é menor de idade');
    }
    else if($g['idade'] >= 18 && $g['idade'] < 60){
        echo('A pessoa informada, é maior de idade');
    }
    else{
        echo('A pessoa informada, é idosa');
    } 