<?php 
    // Sessão - PHP

    // -> Para adicionar "valores" ao final de um vetor

    // $arr = [
    //     'valores' => []
    // ];

    // $arr['valores'][] = 1;

    // print_r($arr);

    // -> Agora sim indo para sessões

    session_start();
    
    // $_SESSION['nome'] = 'aaaaaa';
    print_r($_SESSION);