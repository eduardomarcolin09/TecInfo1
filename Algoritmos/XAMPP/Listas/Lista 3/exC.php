<?php
    // c) Faça um algoritmo que peça o ano de nascimento de uma pessoa. Deve haver uma
    // caixa de seleção para que o usuário indique se já fez aniversário este ano. Por fim,
    // escreva na tela quantos anos a pessoa tem.

    $anoatual = date("Y");
    $idade = $anoatual - $_GET['ano'];

    if(isset($_GET['JFA'])){
        echo('Você tem ' . $idade . ' anos');
    }
    else{
        echo('Você tem ' . $idade-1 . ' anos');
    }