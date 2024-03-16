<?php
    // Criar_Senhas - PHP

    $senhas = [
        'rafael' => password_hash('123', PASSWORD_BCRYPT),
        'fulano' => password_hash('fulano', PASSWORD_BCRYPT),
        'ravi' => password_hash('ravi', PASSWORD_BCRYPT),
        'matilde' => password_hash('matilde', PASSWORD_BCRYPT),
    ];

    file_put_contents('senhas.txt', json_encode($senhas));

    echo 'Senhas criadas com sucesso :-)';

    