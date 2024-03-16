<?php
    // d) Crie um algoritmo que receba três notas de um aluno e calcule a média. Sabendo
    // que a nota mínima para a aprovação é 7, imprima uma mensagem na tela caso o
    // aluno tenha sido aprovado.

    $g = $_GET;
    $media = ($g['nota1'] + $g['nota2'] + $g['nota3']) / 3;

    if($media >= 7 ){
        echo('Aluno aprovado');
    }
    else{
        echo('Aluno reprovado');
    }