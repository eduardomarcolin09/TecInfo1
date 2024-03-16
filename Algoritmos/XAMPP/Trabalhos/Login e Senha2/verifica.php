<?php
    // Verifica - PHP

    // Importação do arquivo

    $ler = file_get_contents('senhas.txt');
    $senhas = (array) json_decode($ler);

    // Puxar os valores do formulário

    $usuario = $_POST['usuario'];
    $senha = $_POST['senha'];

    // Verifica se dentro das senhas existe um índice
    // com o nome do usuário

    if (!isset($senhas[$usuario])){
        header('location: login.php?erro=1');
        die;
    }

    // Comparar senha digitada com a original
    
    $senha_original = $senhas[$usuario];

    if (!password_verify($senha, $senha_original)){
        header('location: login.php?erro=1');
        die;
    }

    header('location: secreto.php');
