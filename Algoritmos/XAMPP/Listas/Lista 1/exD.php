<?php
    // d) Faça um algoritmo que leia dois números e depois apresente uma saída da seguinte forma:
    // Primeiro número: __
    // Segundo número: __
    // Soma: __
    // Subtração: __
    // Multiplicação: __
    // Divisão: __
    
    echo('Primeiro número: ' . $_GET['n1'] . '<br>');
    echo('Segundo número: '. $_GET['n2'] . '<br>');
    echo('Soma: ' . $_GET['n1'] + $_GET['n2'] . '<br>');
    echo('Subtração: ' . $_GET['n1'] - $_GET['n2'] . '<br>');
    echo('Multiplicação: ' . $_GET['n1'] * $_GET['n2'] . '<br>');
    echo('Divisão: ' . $_GET['n1'] / $_GET['n2'] . '<br>');
    