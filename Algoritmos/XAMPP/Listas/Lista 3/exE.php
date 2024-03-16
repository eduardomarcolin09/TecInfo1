<?php
    // e) Escreva um algoritmo que receba dois números. Em seguida, deverá aparecer
    // escrita na tela uma das seguintes mensagens: “o primeiro é maior”, “o segundo é
    // maior”, “os números são iguais”

    if($_GET['n1'] > $_GET['n2']){
        echo('O primeiro é maior');
    }
    else if($_GET['n2'] > $_GET['n1']){
        echo('O segundo é maior');
    }
    else{
        echo('Os números são iguais');
    }