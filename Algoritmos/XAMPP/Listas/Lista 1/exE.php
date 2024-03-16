<?php
    // e) Crie um algoritmo que receba um número e apresente esse número ao quadrado e
    // ao cubo.
    
    $aoquadrado = $_GET['num'] * $_GET['num'];
    $aocubo = $_GET['num'] * $_GET['num'] * $_GET['num'];
    echo('O número ao quadrado: ' . $aoquadrado . '<br>');
    echo('O número ao cubo: ' . $aocubo . '<br');
