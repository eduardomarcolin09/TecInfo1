<?php
    // Teste - PHP

    #$arr = [1 , 2 , 3];

    $arr = [
        [
            'nome' => 'Jojoba',
            'idade' => '86',
            'saude' => 'Nao das melhores',
        ],
        [
            'nome' => 'Mariah Carey',
            'idade' => '86',
            'saude' => 'Nao das melhores',
        ],

    ];

    #echo $arr; die;
    #echo json_encode($arr);

    // Gravar o Arquivo

    file_put_contents('teste.txt', json_encode($arr));