<?php
    // <!--Trabalho feito por: Eduardo Marcolin e João Duarte-->
    session_start();
    $p = $_POST;
    echo('<h1 style="text-align: center;">Super Quiz</h1>');
    echo($_SESSION['nome']);
    $respostas = $_SESSION['totalacertos'];
    if($p['r5'] === "certa"){
        $respostas++;
        $_SESSION['totalacertos'] = $respostas;
    }

    $resposta_final = $_SESSION['totalacertos'] * 20;
    echo ('<p>Pontuação: ' . $resposta_final . '% </p> ');
    echo('<a href="inicial.html">Jogar de novo</a>')
?>
