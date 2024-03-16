<?php
    // Gera um número aleatório entre os valores (min e max digitados pelo usuário)
    
    $p = $_POST;
    $gera = rand($p['min'],$p['max']);
    echo $gera;
