<?php
    // Compras_gravar - PHP
    session_start();

    // Verificar se já existe uma lista de compras
    // Se não houver, cria uma

    if(!isset($_SESSION['compras'])){
        $_SESSION['compras'] = [];
    }

    // -> Para verificar se existe e Adiciona o item na lista

    if(isset($_POST['comprinha']) 
        && !empty($_POST['comprinha']) // Verificar se a lista está vazia
        && !in_array($_POST['comprinha'], $_SESSION ['compras'])){  // Verificar se ja existe o produto na lista
        $_SESSION['compras'][] = $_POST['comprinha'];
    }

    // -> Manda a pessoa para a página compras.php

    header('location: compras.php');