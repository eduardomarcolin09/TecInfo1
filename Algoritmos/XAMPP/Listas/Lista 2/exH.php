<?php
    // h) Desenvolva uma versão melhorada do algoritmo anterior. Além de solicitar o
    // número de hóspedes e o valor por hóspede, o programa também deve saber
    // quantos dias as pessoas ficarão hospedadas. Após capturar essas informações,
    // mostre na tela o valor total da hospedagem. Em seguida, mostre o valor com
    // um imposto de 3%.

    $VFinal = $_GET['hospedes'] * $_GET['valorPorHospedes'] * $_GET['dias'];
    echo('O valor total da hospedagem é ' . $VFinal . '<br>');

    $valorDoImposto = 3 / 100;

    $VI = $VFinal - ($VFinal * $valorDoImposto);
    echo('O valor da diária é R$ '.$VI);