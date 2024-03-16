<?php
    // Secreto - PHP

    $ler = file_get_contents('senhas.txt');
    $senhas = (array) json_decode($ler);
    echo ('<h1> Usuários e senhas </h1>');

    foreach($senhas as $usuario => $senhas){
        echo ('Usuário: ' . $usuario . '<br>'. 'Senha: ' . $senhas . '<br>');
    }
   
    