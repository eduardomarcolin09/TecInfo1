<?php
    // c) Desenvolva um algoritmo que receba dois números reais e imprima na tela o maior
    // deles.

    $g = $_GET;

    if($g['n1'] > $g['n2']){
        echo('O maior deles é o número um, ' . $g['n1']);
    }
    else{
        echo('O maior deles é o número dois, ' . $g['n2']);
    }