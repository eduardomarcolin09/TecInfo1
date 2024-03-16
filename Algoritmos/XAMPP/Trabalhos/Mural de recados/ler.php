<?php
    $g = $_GET;
    $nome_do_autor = $g['name'];
    $mensagem = $g['mensagem'];
    $data = date('h:i d/m/Y');
    $conteudo = 'Nome do autor: ' . $nome_do_autor . '<br>' . 'Mensagem: ' . $mensagem . '<br>' . 'Data: ' . $data . '<br>';

    file_put_contents('recados.txt', $conteudo, FILE_APPEND);
    header('location: abacate.php');