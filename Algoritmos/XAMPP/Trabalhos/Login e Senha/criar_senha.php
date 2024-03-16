<?php
    // Criar_Senha - PHP

    // Arquivo para criptografar a senha
    // e guardar no arquivo senha.txt

    $senha_nova = '123';
    $senha_cripto = password_hash($senha_nova, PASSWORD_BCRYPT);

    echo $senha_cripto;
    file_put_contents('senha.txt', $senha_cripto);