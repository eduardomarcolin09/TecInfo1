<?php
    $nome = $_POST['name'];
    setcookie("nome", $nome);
    header('location: cookie_index.php');
