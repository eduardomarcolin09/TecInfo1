<?php
    // Ler arquivo - PHP

    $contudo = file_get_contents('eduardo.txt');
?>

<h1>Leitura do arquivo</h1>
<p>Conteúdo do arquivo: <?php echo $contudo; ?></p>