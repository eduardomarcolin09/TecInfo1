<form action="ler.php" method="get">
    <p>
        <label for="name">Digite o nome do autor:</label>
        <input type="text" name="name" id="name"> 
    </p>
    <p>
        <label for="mensagem">Digite a mensagem:</label>
        <input type="textarea" name="mensagem" id="mensagem">
    </p>
        <input type="submit" value="Enviar">
        <br>
        <?php 
        $conteudo = file_get_contents('recados.txt');
        echo $conteudo;
        ?>
</form>