<?php
    // Secreto - PHP
    session_start();
    
    // A pessoa está autenticada?
    // Se não estiver, manda ela pra login.php
    if(!isset($_SESSION['usuario'])){
        header('location: login.php');
    }
?>

Olá, <?php echo $_SESSION['usuario']; ?>.
<p>
    <a href="sair.php">Sair</a>
</p>    