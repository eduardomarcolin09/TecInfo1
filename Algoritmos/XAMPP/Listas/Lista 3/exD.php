<?php
    // d) Crie um algoritmo que receba dois números e informe a metade do maior e o
    // dobro do menor.

    if($_GET['n1'] > $_GET['n2']){
        echo('A metade do maior é ' . $_GET['n1']/2);
        echo('O dobro do maior é ' . $_GET['n2']*2);
    }
    else{
        echo('A metade do maior é ' . $_GET['n2']/2);
        echo('O dobro do maior é ' . $_GET['n1']*2);
    }