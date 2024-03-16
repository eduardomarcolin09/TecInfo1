<?php
    // f) Faça um algoritmo que receba três notas de um aluno e apresente a média dessas
    // notas.

    $media = ($_GET['n1'] + $_GET['n2'] + $_GET['n3']) / 3;
    echo('A média das notas é: '. $media);