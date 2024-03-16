<?php
    // f) Um comerciante precisa colocar alguns produtos à venda com desconto. Por
    // conta disso, precisa de um algoritmo que realize esse cálculo com base no
    // valor do produto. Faça um algoritmo que receba o preço do produto e escreva
    // o valor dando um desconto de 7%.

    $numero = 7;
    $porcentagem = $numero / 100;
    $desconto = $_GET['produto'] * $porcentagem;
    $valorFinal = $_GET['produto'] - $desconto;
    echo('O valor final, com o desconto é de R$ '.$valorFinal);