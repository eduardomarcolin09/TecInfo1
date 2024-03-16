<?php
    // Compras_apagar_ultimo - PHP
    session_start();

    // Retira um item do final da lista
    array_pop($_SESSION['compras']);

    header('location: compras.php');