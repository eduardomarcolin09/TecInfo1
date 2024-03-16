<?php
    // Compras - PHP

    session_start();

    // -> Já existe uma lista de compras?

    if(isset($_SESSION['compras'])){
        echo '<ol>';
        foreach($_SESSION['compras'] as $compras){
        echo '<li>',$compras,'</li>';
        }
        echo '</ol>';
    }
    else{
        echo '<p> Você ainda não possui nada na sua lista</p>';
    }
?>

    <!-- Formulário / HTML -->

    <form action="compras_gravar.php" method="post">
        <input type="text" name="comprinha" placeholder="Digita ai">
        <input type="submit" value="Adicionar">
    </form>

    <p><a href="compras_esvaziar.php">Esvaziar lista</a></p>    
    <p><a href="compras_apagar_ultimo.php">Apagar o Último</a></p>
    <p><a href="compras_apagar_primeiro.php">Apagar o Primeiro</a></p>  