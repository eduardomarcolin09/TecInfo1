<?php
    if(isset($_GET['erro'])){
        echo '<p>Usuário ou senha inválidos.</p>';
    }
?>

<form action="verifica.php" method="post">
    <p>
         <label for="usuario">Digite o Usuário:</label>
        <input type="text" name="usuario" placeholder="NOME"> 
    </p>
    <p>
        <label for="senha">Digite a Senha:</label>
        <input type="password" name="senha" placeholder="SENHA">
    </p>
    <input type="submit" value="Enviar">
</form>








