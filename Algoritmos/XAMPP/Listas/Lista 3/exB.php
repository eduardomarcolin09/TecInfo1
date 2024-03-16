<?php
    // b) Crie um algoritmo que receba duas notas de um aluno. Em seguida, calcule a
    // média e imprima na tela se ele está aprovado ou reprovado.

    $media = ($_GET['nota1'] + $_GET['nota2']) / 2;
    if($media >= 7){
        echo('O aluno está aprovado');
    }
    else{
        echo('O aluno está reprovado');
    }