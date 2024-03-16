<?php
    // Ler  - PHP
    session_start();
    $p = $_POST;
    $senha = file_get_contents('senha.txt');
   
    if($p['usuario'] == 'Cláudio' && password_verify($p['senha'], $senha)){
        $_SESSION['usuario'] = $p['usuario'];
        header('location: secreto.php');
        die;
    }
    else{
        header('location: login.php?erro=1');
    }