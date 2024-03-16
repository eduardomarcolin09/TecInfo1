<?php
    // f) Um comerciante precisa verificar se obteve um bom resultado em suas vendas.
    // Crie um algoritmo que receba um valor e mostre uma frase de acordo com o
    // resultado:
    // • Maior que 500: Excelente
    // • Entre 500 e 301: Bom
    // • Entre 300 e 101: Razoável
    // • 100 ou menos: Ruim

    $get = $_GET;

    if($get['num'] > 500){
        echo('Excelente');
    }
    else if($get['num'] > 300 && $get['num'] <=500){
        echo('Bom');
    }
    else if($get['num'] > 100 && $get['num'] <=300){
        echo('Razoável');
    }
    else{
        echo('Ruim');
    }