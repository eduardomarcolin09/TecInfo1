<?php
    // a) Escreva um algoritmo para um radar de velocidade. O programa deve solicitar a
    // velocidade do automóvel e, caso seja superior a 80, deve indicar que o motorista
    // foi multado. Caso contrário, deve informar que não houve multa

    if($_GET['velocidade'] > 80){
        echo('O motorista foi multado');
    }
    else{
        echo('O motorista não foi multado');
    }