<?php
    // g) Em um hotel o valor da hospedagem é definido de acordo com o número de
    // hóspedes que ficará no quarto. Desenvolva um algoritmo que receba dois
    // valores (o número de hóspedes e o valor por hóspede) e apresente o valor total
    // da diária
    
    $Vdiaria = $_GET['hospedes'] * $_GET['valorPorHospedes'];
    echo('O valor da diária é R$ '.$Vdiaria);