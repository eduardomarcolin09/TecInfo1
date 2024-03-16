<?php
    // a) Crie um algoritmo que calcule o troco de uma venda. O usuário deve fornecer
    // o valor da compra e o montante recebido do cliente.
    
    $troco = $_GET['compra'] - $_GET['recebido'];
    echo($troco);