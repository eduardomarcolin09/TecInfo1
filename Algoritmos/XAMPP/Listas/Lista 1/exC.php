<?php
    // c) Elabore um algoritmo que leia dois números inteiros e grave-os nas variáveis x e
    // y. Em seguida, encontre uma forma de passar o valor da variável x para a y e viceversa. Depois, imprima os valores na tela.

    $trocar = 0;
    $trocar = $_GET['valorX'];
    $_GET['valorX'] =  $_GET['valorY'];
    $_GET['valorY'] =  $trocar;

    echo('O valor de X é: '.$_GET['valorX'].'<br>');
    echo('O valor de Y é: '.$_GET['valorY']);



