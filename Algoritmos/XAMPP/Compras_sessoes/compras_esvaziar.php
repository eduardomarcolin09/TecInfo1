<?php
    // Compras Esvaziar - PHP

    // -> 1ª forma: apagar toda a sessão

    session_start();
    session_destroy();
    header('location: compras.php');